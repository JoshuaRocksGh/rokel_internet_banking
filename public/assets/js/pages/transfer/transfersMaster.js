// const { get } = require("jquery");

function makeTransfer(url, data) {
    siteLoading("show");
    $.ajax({
        type: "POST",
        url: url,
        datatype: "application/json",
        data: data,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log(response);
            siteLoading("hide");

            if (response.responseCode == "000") {
                swal.fire({
                    title: "Transfer successful!",
                    html: response.message,
                    icon: "success",
                    showConfirmButton: "false",
                    timer: "3000",
                });
                getAccounts();
                $("#success-message").text(response.message);
                $("#spinner").hide();
                $("#spinner-text").hide();
                $("#back_button").hide();
                $(".hide-on-success").hide();
                $(".rtgs_card_right").hide();
                $(".show-on-success").show();
            } else {
                toaster(response.message, "error", 3000);
                $("#confirm_transfer").show();
                $("#confirm_modal_button").prop("disabled", false);
                $("#spinner").hide();
                $("#spinner-text").hide();
                $("#back_button").show();
                $("#print_receipt").hide();
                $("#related_information_display").show();
                $(".success_gif").hide();
            }
        },
        error: function (error) {
            // console.log(error.statusText, );
            siteLoading("hide");
            toaster(error.statusText, error);
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
                console.log(response.data);
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
                                data[index].EMAIL +
                                "~" +
                                data[index].BANK_NAME +
                                "~" +
                                data[index].BANK_SWIFT_CODE +
                                "~" +
                                data[index].ADDRESS_1 +
                                "~" +
                                data[index].BANK_COUNTRY,
                        }).text(
                            data[index].BEN_ACCOUNT +
                                " || " +
                                data[index].NICKNAME
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
function getCountries() {
    return $.ajax({
        type: "GET",
        url: "get-countries-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            if (data.length > 1) {
                $.each(data, (i) => {
                    let { actualCode, codeType, description } = data[i];
                    option = `<option value="${codeType}"  data-country-code="${actualCode}">${description}</option>`;
                    $("#onetime_select_country").append(option);
                });
            } else {
                toaster(response.message);
            }
        },
    });
}

function getInternationalBanks(countryCode) {
    return $.ajax({
        type: "GET",
        url: "get-international-bank-list-api",
        data: {
            countryCode,
        },
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            // console.log(data);
            if (data.length > 1) {
                $.each(data, (i) => {
                    let { BICODE, BANK_DESC, COUNTRY } = data[i];
                    option = `<option value="${BICODE}" data-bank-country="${COUNTRY}" >${BANK_DESC}</option>`;
                    $("#onetime_select_bank").append(option);
                });
            } else {
                toaster(response.message);
            }
        },
    });
}

function getLocalBanks() {
    return $.ajax({
        type: "GET",
        url: "get-bank-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            // console.log(data);
            if (data.length > 1) {
                $.each(data, (i) => {
                    let { bankCode, bankDescription, bankSwiftCode } = data[i];
                    option = `<option value="${bankCode}" data-bank-swift-code="${bankSwiftCode}">${bankDescription}</option>`;
                    $("#onetime_select_bank").append(option);
                });
            } else {
                toaster(response.message);
            }
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

function getStandingOrderFrequencies() {
    $.ajax({
        type: "GET",
        url: "get-standing-order-frequencies-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            $.each(data, function (index) {
                $(".so_frequency").append(
                    $("<option>", {
                        value: data[index].code + "~" + data[index].name,
                    }).text(data[index].name)
                );
            });
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getStandingOrderFrequencies();
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
    $(".display_to_account_no").text(accountNumber);
}

$(() => {
    let transferInfo = new Object();
    let fromAccount = new Object();
    $(".account_currency").text("SLL");
    let toAccount = new Object();
    let onetimeToAccount = new Object();
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
    if (transferType !== "Own Account") {
        let beneCode;
        if (transferType === "Same Bank") {
            beneCode = "SAB";
        } else if (transferType === "Local Bank") {
            beneCode = "OTB";
            // $("onetime_beneficiary_name").removeAttribute("readonly");
        } else if (transferType === "Standing Order") {
            getStandingOrderFrequencies();
            beneCode = "SAB";
        } else if (transferType === "International Bank") {
            beneCode = "INTB";
        }
        if (beneCode) {
            getToAccount(`get-transfer-beneficiary-api?beneType=${beneCode}`);
        }
    }
    expenseTypes();

    // HANDLE BENE TOGGLE
    $("#onetime_tab").on("click", () => {
        $(".display_to_account").text("");
        updateTransactionType();
        $(".display_to_account_no").text(onetimeToAccount.accountNumber);
        if (onetimeToAccount.name) {
            $("#onetime_beneficiary_name").val(onetimeToAccount.name);
            $(".display_to_account_name").text(onetimeToAccount.name);
            $(".display_to_account_currency").text(onetimeToAccount.currency);
        }
    });
    $("#beneficiary_tab").on("click", () => {
        updateTransactionType();
        $(".display_to_account").text("");
        $("#to_account").trigger("change");
    });

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
        fromAccount.accountMandate = accountData[5];
        // set summary values for display
        // $(".display_from_account_type").text(fromAccount.type);
        $(".display_from_account_name").text(fromAccount.name);
        $(".display_from_account_no").text(fromAccount.accountNumber);
        $(".display_from_account_currency").text(fromAccount.currency);
        $(".account_currency")
            .text(fromAccount.currency)
            .val(fromAccount.currency);
        $(".display_from_account_balance").text(
            formatToCurrency(fromAccount.accountBalance)
        );
        console.log(fromAccount);
        if (transferInfo.amount) {
            $(".display_transfer_currency").text(fromAccount.currency);
        }
    });

    $("#to_account").on("change", function () {
        toAccount.info = $(this).val();
        if (!toAccount.info) {
            $(".display_to_account").val("").text("");
            return false;
        }
        const accountData = toAccount.info.split("~");
        toAccount.type = accountData[0];
        toAccount.name = accountData[1];
        toAccount.accountNumber = accountData[2];
        toAccount.currency = accountData[3];
        if (transferType !== "Own Account") {
            toAccount.email = accountData[3].trim();
            $(".display_to_receiver_email")
                .val(toAccount.email)
                .text(toAccount.email);
        }
        // set summary values for display
        $(".display_to_account_type").text(toAccount.type).val(toAccount.type);
        $(".display_to_account_name").text(toAccount.name).val(toAccount.name);
        $(".display_to_account_no")
            .text(toAccount.accountNumber)
            .val(toAccount.accountNumber);

        $(".display_to_account_currency").text(toAccount.currency);

        if (
            transferType === "Local Bank" ||
            transferType === "International Bank"
        ) {
            toAccount.bank = accountData[4].trim();
            toAccount.bankCode = accountData[5].trim();
            toAccount.address = accountData[6].trim();

            $(".display_to_account_address").text(toAccount.address);
            $("#beneficiary_address").val(toAccount.address);
            $(".display_to_bank_name").text(toAccount.bank);
            $("#beneficiary_bank_name").val(toAccount.bank);
        }
        if (transferType === "International Bank") {
            toAccount.bankCountryCode = accountData[7].trim();
        }
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
    // ===================================================
    //  isOnetimeTransfer
    // ===================================================
    $("#onetime_account_number").on("keyup", function () {
        if (onetimeToAccount.accountNumber === $(this).val()) {
            return false;
        }
        onetimeToAccount.accountNumber = "";
        if ($(this).val() === fromAccount.accountNumber) {
            toaster("Cannot send to same account", "warning");
            return false;
        }
        onetimeToAccount.accountNumber = $(this).val();
        if (transferType === "Same Bank") {
            if (onetimeToAccount.accountNumber.length > 17) {
                getAccountDescription(onetimeToAccount);
            }
        } else {
            handleToAccount(onetimeToAccount);
        }
    });
    $("#onetime_beneficiary_email").on("keyup", function () {
        onetimeToAccount.email = $(this).val();
        $(".display_to_receiver_email").text(onetimeToAccount.email);
    });

    // international bank
    if (transferType === "International Bank") {
        getCountries();
        $("#onetime_select_country").on("change", () => {
            transferInfo.bankCountryCode = $("#onetime_select_country").val();
            getInternationalBanks(transferInfo.bankCountryCode);
        });
        $("#onetime_select_bank").on("change", () => {
            transferInfo.bankCode = $("#onetime_select_bank").val();
        });
    }

    // Local Bank
    if (transferType === "Local Bank") {
        getLocalBanks();
        $("#onetime_select_bank").on("change", () => {
            transferInfo.bankCode = $(this).val();
        });
    }

    // =========================================================
    //Other Checks
    // =========================================================
    $("#transfer_mode").change(function () {
        transferInfo.mode = $(this).val();
        $(".display_to_transfer_type").text(transferInfo.mode);
    });

    // Standing order date checks
    if (transferType === "Standing Order") {
        let today = new Date();
        let day = today.getDate().toString().padStart(2, "0");
        let month = (today.getMonth() + 1).toString().padStart(2, "0");
        transferInfo.startDate = today.getFullYear() + "-" + month + "-01";
        transferInfo.endDate = today.getFullYear() + "-" + month + "-" + day;
        transferInfo.thisDay = transferInfo.endDate;

        $("#so_start_date").on("change", function () {
            transferInfo.startDate = $("#so_start_date").val();
            $(".display_so_start_date").text(transferInfo.startDate);
        });

        $("#so_end_date").on("change", function () {
            transferInfo.endDate = $("#so_end_date").val();
            $(".display_so_end_date").text(transferInfo.endDate);
        });

        //standing order frequency
        $("#beneficiary_frequency").on("change", function () {
            let standing_order = $("#beneficiary_frequency").val().split("~");
            transferInfo.frequency = standing_order[0];
            // var optionText = $("#beneficiary_frequency option:selected").text();
            $(".display_frequency_so").text(standing_order[1]);
        });
    }

    //  {{-- ---------------- --}}
    // conclusions
    // {{-- ----------------- --}}
    $("#next_button").on("click", (e) => {
        let pass = true;
        transferInfo.purpose =
            transferType === "Standing Order"
                ? "Standing Order"
                : $("#purpose").val();
        $(".display_purpose").text(transferInfo.purpose);
        transferInfo.category = $("#category").val();
        if (transferInfo.category !== "Others") {
            transferInfo.category = $("#category").val().split("~")[1];
        }
        $(".display_category").text(transferInfo.category);

        e.preventDefault();
        if (isOnetimeTransfer) {
            // onetime checks for other transfers aside own account
            transferInfo.toAccount = onetimeToAccount.accountNumber;
            if (transferType !== "Own Account")
                onetimeToAccount.email = $("#onetime_beneficiary_email").val();
            if (validateEmail(onetimeToAccount.email)) {
                toaster("Please enter valid beneficiary email", "warning");
                return false;
            }
            transferInfo.beneficiaryEmail = onetimeToAccount.email;
            transferInfo.beneficiaryName = onetimeToAccount.name;
        } else {
            transferInfo.toAccount = toAccount.accountNumber;
            transferInfo.beneficiaryName = toAccount.name;
            // benefiiciary checks for other transfers aside own account
            if (transferType !== "Own Account") {
                transferInfo.beneficiaryEmail = toAccount.email;
            }
        }
        // Local Bank Checks
        if (
            transferType === "Local Bank" ||
            transferType === "International Bank"
        ) {
            if (transferType === "Local Bank" && !transferInfo.mode) {
                pass = "false";
            }
            if (transferType === "International Bank") {
                transferInfo.bankCountryCode = toAccount.bankCountryCode;
            }
            transferInfo.beneficiaryAddress = toAccount.address;
            transferInfo.bankName = toAccount.bank;
            transferInfo.bankCode = toAccount.bankCode;
        }

        transferInfo.fromAccount = fromAccount.accountNumber;
        transferInfo.currency = fromAccount.currency;
        console.log(transferInfo);
        if (
            !transferInfo.fromAccount ||
            !transferInfo.toAccount ||
            !transferInfo.amount ||
            !transferInfo.category ||
            !transferInfo.purpose ||
            !pass
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
        if (transferInfo.toAccount === transferInfo.fromAccount) {
            toaster("cannot send to the same account", "warning");
            return false;
        }
        if (transferType === "Standing Order") {
            const { startDate, endDate, thisDay } = transferInfo;
            if (startDate < thisDay) {
                toaster("Start date can't be less than today", "warning");
                return false;
            } else if (endDate < thisDay) {
                toaster("End date can't be less than today", "warning");
                return false;
            } else if (startDate > endDate) {
                toaster("Start date can't be greater than end date", "warning");
                return false;
            } else if (!transferInfo.frequency) {
                toaster("Select order frequency", "warning");
                return false;
            }
        }

        $("#transaction_form").hide();
        $("#transaction_summary").show();
        // $("#transfer_details_view").hide();
        validationsCompleted = true;
    });

    function corporateSpecific() {
        transferInfo.accountMandate = fromAccount.accountMandate;
        console.log(transferInfo);
        const endPoint =
            "corporate-" +
            transferType.toLowerCase().trim().replace(" ", "-") +
            "-transfer-api";
        makeTransfer(endPoint, transferInfo);
    }

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
        console.log(transferInfo);
        confirmationCompleted = true;
        if (ISCORPORATE) {
            corporateSpecific();
            return;
        }
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
            "-transfer-api";
        makeTransfer(endPoint, transferInfo);
        $("#user_pin").val("").text("");
        confirmationCompleted = false;
    });

    $("#back_button").on("click", (e) => {
        e.preventDefault();
        $("#transaction_summary").hide();
        $("#transaction_form").show();
        $("#transfer_details_view").show();
        validationsCompleted = false;
    });
});
