function makeTransfer(url, data) {
    $.ajax({
        type: "POST",
        url: url,
        datatype: "application/json",
        data: data,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response.responseCode == "000") {
                swal.fire({
                    title: "Logout successful!",
                    html: response.message,
                    icon: "success",
                    showConfirmButton: "false",
                    timer: "2000",
                });
                $("#spinner").hide();
                $("#spinner-text").hide();
                $("#back_button").hide();
                $("#print_receipt").show();
                $(".rtgs_card_right").hide();
                $(".success_gif").show();
            } else {
                toaster(response.message, "error", 3000);
                $("#confirm_transfer").show();
                $("#confirm_modal_button").prop("disabled", false);
                $("#spinner").hide();
                $("#spinner-text").hide();
                $("#back_button").show();
                $("#print_receipt").hide();
                // {{-- $("#related_information_display").addClass("d-none d-sm-block"); --}}
                $("#related_information_display").show();
                $(".success_gif").hide();
            }
        },
    });
}

function getToAccount(endPoint) {
    $.ajax({
        type: "GET",
        url: endPoint,
        datatype: "application/json",
        success: function (response) {
            console.log(response);
            let data = response.data;
            if (response.data.length > 0) {
                $(".no_beneficiary").hide();
                $.each(data, function (index) {
                    $("#to_account").append(
                        $("<option>", {
                            value:
                                data[index].BENEF_TYPE +
                                "~" +
                                data[index].NICKNAME +
                                "~" +
                                data[index].BEN_ACCOUNT +
                                "~" +
                                data[index].BEN_ACCOUNT_CURRENCY +
                                "~" +
                                data[index].EMAIL,
                        }).text(
                            data[index].BENEF_TYPE +
                                "~" +
                                data[index].BEN_ACCOUNT +
                                "~" +
                                data[index].NICKNAME +
                                "~" +
                                data[index].BEN_ACCOUNT_CURRENCY
                        )
                    );
                });
            } else {
                $(".no_beneficiary").show();
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getToAccount();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function expenseTypes() {
    $.ajax({
        type: "GET",
        url: "get-expenses",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            $.each(data, function (index) {
                if (data[index].expenseName === "Others") {
                    $("#category").append(
                        $("<option selected>", {
                            value:
                                data[index].expenseCode +
                                "~" +
                                data[index].expenseName,
                        }).text(data[index].expenseName)
                    );
                } else {
                    $("#category").append(
                        $("<option>", {
                            value:
                                data[index].expenseCode +
                                "~" +
                                data[index].expenseName,
                        }).text(data[index].expenseName)
                    );
                }
            });
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                expenseTypes();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function getAccountDescription(account) {
    $.ajax({
        type: "POST",
        url: "get-account-description",
        datatype: "application/json",
        data: {
            authToken: "string",
            accountNumber: account.accountNumber,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },

        success: function (response) {
            console.log(response);
            if (response.responseCode == "000") {
                details = response.data;
                account.name = details.accountDescription;
                account.currency = details.accountCurrencyIso;
                console.log(account);
                handleToAccount(account);
            } else {
                toaster(response.message, "warning");
                account.name = "";
                account.currency = "";
                handleToAccount(account);
            }
        },
    });
}

function handleToAccount(account) {
    let { name, currency, accountNumber } = account;
    $("#onetime_beneficiary_name").val(name);
    $(".display_to_account_name").text(name);
    $(".display_to_account_currency").text(currency);
    if (!name) {
        $(".display_to_account_no").text(accountNumber);
    } else {
        $(".display_to_account_no").text("");
    }
}

$(() => {
    let transferInfo = new Object();
    let fromAccount = new Object();
    $(".account_currency").text("SLL");
    let toAccount = new Object();
    let confirmationCompleted = false;
    let validationsCompleted = false;
    let isOnetimeTransfer = false;
    function updateTransactionType() {
        if ($("#onetime_toggle").is(":checked")) {
            isOnetimeTransfer = true;
        } else {
            isOnetimeTransfer = false;
        }
    }
    if (transferType === "Same Bank") {
        getToAccount("get-transfer-beneficiary-api?beneType=SAB");
    }
    expenseTypes();

    $("#from_account").on("change", function () {
        fromAccount.info = $(this).val();

        if (!fromAccount.info) {
            $(".display_from_account").val("").text("");
            $(".account_currency").text("SLL");
            return false;
        }
        const accountData = fromAccount.info.split("~");
        fromAccount.type = accountData[0].trim();
        fromAccount.name = accountData[1].trim();
        fromAccount.accountNumber = accountData[2].trim();
        fromAccount.currency = accountData[3].trim();
        fromAccount.accountBalance = parseFloat(accountData[4].trim());
        // set summary values for display
        // $(".display_from_account_type").text(fromAccount.type);
        $(".display_from_account_name").text(fromAccount.name);
        $(".display_from_account_no").text(fromAccount.accountNumber);
        $(".display_from_account_currency").text(fromAccount.currency);
        $(".account_currency").text(fromAccount.currency);
        $(".display_from_account_balance").text(
            formatToCurrency(fromAccount.accountBalance)
        );

        if (transferInfo.amount) {
            $(".display_transfer_currency").text(fromAccount.currency);
        }
    });

    $("#to_account").on("change", function () {
        toAccount.info = $(this).val();
        if (!toAccount.info) {
            $("display_to_account").val("").text("");
            return false;
        }
        const accountData = toAccount.info.split("~");
        toAccount.type = accountData[0];
        toAccount.name = accountData[1];
        toAccount.accountNumber = accountData[2];
        toAccount.currency = accountData[3];
        toAccount.accountBalance = parseFloat(accountData[4].trim());

        // set summary values for display
        $(".display_to_account_type").text(toAccount.type);
        $(".display_to_account_name").text(toAccount.name);
        $(".display_to_account_no").text(toAccount.accountNumber);
        $(".display_to_account_amount").text(
            formatToCurrency(toAccount.accountBalance)
        );
        $(".display_to_account_currency").text(toAccount.currency);
        //$(".display_to_account_amount").text(formatToCurrency(parseFloat(toAccountInfo[4].trim())))
    });

    $("#amount").on("keyup", function () {
        transferInfo.amount = $(this).val();
        if (!transferInfo.amount) {
            $(".display_transfer_amount").text("");
            $(".display_transfer_currency").text("");
            return false;
        }
        if (!fromAccount.currency) {
            $(".display_transfer_currency").text("SLL");
        } else {
            $(".display_transfer_currency").text(fromAccount.currency);
        }
        $(".display_transfer_amount").text(
            formatToCurrency(transferInfo.amount)
        );
    });
    $("#purpose").on("change", () => {
        transferInfo.purpose = $(this).val();
        $(".display_purpose").text(transferInfo.purpose);
    });
    $("#category").on("change", () => {
        transferInfo.category = $("#category").val();
        if (transferInfo.category !== "Others") {
            transferInfo.category = $("#category").val().split("~")[1];
        }
        $(".display_category").text(transferInfo.category);
    });

    $("#next_button").on("click", (e) => {
        e.preventDefault();
        if (
            !fromAccount.info ||
            !toAccount.info ||
            !transferInfo.amount ||
            !transferInfo.category ||
            !transferInfo.purpose
        ) {
            toaster("complete all fields", "warning");
            return false;
        }
        if (transferInfo.amount <= 0 || isNaN(transferInfo.amount)) {
            toaster("invalid transfer amount", "warning");
            return false;
        }
        if (transferInfo.amount > fromAccount.accountBalance) {
            toaster("Insufficient account balance", "warning");
            return false;
        }
        $("#transaction_form").hide();
        $("#transaction_summary").show();
        validationsCompleted = true;
    });

    $("#confirm_transfer_button").on("click", (e) => {
        e.preventDefault();
        if (!$("#terms_and_conditions").is(":checked")) {
            toaster("Accept Terms & Conditions to continue", "warning");
            return false;
        }
        if (!validationsCompleted) {
            somethingWentWrongHandler();
            return false;
        }
        transferInfo.toAccount = toAccount.accountNumber;
        transferInfo.fromAccount = fromAccount.accountNumber;
        transferInfo.currency = fromAccount.currency;
        confirmationCompleted = true;
        $("#centermodal").modal("show");
    });

    $("#transfer_pin").on("click", (e) => {
        e.preventDefault;
        if (!confirmationCompleted) {
            somethingWentWrongHandler();
            return false;
        }
        transferInfo.secPin = $("#user_pin").val();
        if (transferInfo.secPin.length !== 4) {
            toaster("invalid pin", "warning");
            return false;
        }
        const endPoint =
            transferType.toLowerCase().trim().replace(" ", "-") +
            "transfer-api";
        makeTransfer(endPoint, transferInfo);
        $("#user_pin").val("").text("");
        confirmationCompleted = false;
    });

    $("#back_button").on("click", (e) => {
        e.preventDefault();
        $("#transaction_summary").hide();
        $("#transaction_form").show();
        validationsCompleted = false;
    });
});
