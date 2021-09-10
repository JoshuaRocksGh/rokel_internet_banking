let forexRate = [];

function getCorrectFxRate() {
    $.ajax({
        type: "GET",
        url: "get-correct-fx-rate-api",
        datatype: "application/json",
        success: function (response) {
            if (response.responseCode == "000") {
                forexRate = response.data;
            } else {
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getCorrectFxRate();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function getFromAccount() {
    $.ajax({
        type: "GET",
        url: "get-my-account",
        datatype: "application/json",
        success: function (response) {
            console.log(response.data);
            if (response.responseCode == "000") {
                let data = response.data;
                $.each(data, function (index) {
                    $("#from_account").append(
                        $("<option>", {
                            value:
                                data[index].accountType +
                                "~" +
                                data[index].accountDesc +
                                "~" +
                                data[index].accountNumber +
                                "~" +
                                data[index].currency +
                                "~" +
                                data[index].availableBalance +
                                "~" +
                                data[index].accountMandate,
                        }).text(
                            data[index].accountNumber +
                                "~" +
                                data[index].currency +
                                " ~ " +
                                formatToCurrency(
                                    parseFloat(data[index].availableBalance)
                                )
                        )
                    );
                });
            } else {
                if (response.data == null) {
                    window.location = "logout";
                }
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getFromAccount();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function getCurrency() {
    $.ajax({
        type: "GET",
        url: "get-currency-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;

            $.each(data, function (index) {
                if (data[index].isoCode === "SLL") {
                    $(".select_conversion_currency").append(
                        $("<option selected>", {
                            value: data[index].isoCode,
                        }).text(data[index].isoCode)
                    );
                } else {
                    $(".select_conversion_currency").append(
                        $("<option>", {
                            value: data[index].isoCode,
                        }).text(data[index].isoCode)
                    );
                }
            });
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getCurrency();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function getToAccount() {
    $.ajax({
        type: "GET",
        url: "get-transfer-beneficiary-api?beneType=SAB",
        datatype: "application/json",
        success: function (response) {
            console.log(response);
            let data = response.data;
            // {{-- console.log(data); --}}
            if (response.data.length > 0) {
                // {{-- $('.yes_beneficiary').show() --}}
                $(".no_beneficiary").hide();
                $.each(data, function (index) {
                    //$('#from_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));
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
                // {{-- $('.yes_beneficiary').hide() --}}
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
                let name = data[index].expenseName;
                let code = data[index].expenseCode;

                $("#category").append(
                    $("<option>", {
                        value: `${code}~${name}`,
                    }).text(name)
                );
                $("#onetime_category").append(
                    $("<option>", {
                        value: `${code}~${name}`,
                    }).text(name)
                );
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
                toaster("failed to get account detail", "warning");
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
    if (validateAll(name)) {
        $(".display_to_account_no").text(accountNumber);
    } else {
        $(".display_to_account_no").text("");
    }
}

function customer() {
    if (customerType == "C") {
        $("#coporate_transfer_approval").show();
        $("#personal_transfer_receipt").hide();
    } else {
        $("#personal_transfer_receipt").show();
        $("#coporate_transfer_approval").hide();
    }
}

$(function () {
    getFromAccount();
    getToAccount();
    expenseTypes();
    getCurrency();
    getCorrectFxRate();
    customer();
    let toAccount = new Object();
    let onetimeToAccount = new Object();
    let fromAccount = new Object();
    let transactionType;
    let transactionDetails = new Object();
    let onetimeTransactionDetails = new Object();
    let confirmationCompleted = false;
    let validationsCompleted = false;

    customer();
    function updateTransactionType() {
        if ($("#onetime_toggle").is(":checked")) {
            transactionType = "onetime";
        } else {
            transactionType = "beneficiary";
        }
    }
    updateTransactionType();

    function handleConversion(toCur) {
        let amount;
        let displayMidrate = ".display_midrate";
        let displayConverted = ".display_converted_amount";
        let displayRate;
        let converted;

        if (transactionType === "beneficiary") {
            amount = transactionDetails.amount;
            displayRate = "#convertor_rate_";
            converted = "#converted_amount";
        } else if (transactionType === "onetime") {
            console.log("here");
            amount = onetimeTransactionDetails.amount;
            displayRate = "#onetime_convertor_rate";
            converted = "#onetime_converted_amount";
        }
        console.log(amount);
        if (!fromAccount.currency || !amount || isNaN(amount) || amount <= 0) {
            $(".display_midrate").text("");
            $(".display_converted_amount").text("");
            $(converted).val("");
            return;
        }
        let conversionData = currencyConvertor(
            forexRate,
            amount,
            fromAccount.currency,
            toCur
        );
        console.log(conversionData);
        let { convertedAmount, midrate, currencyPair } = conversionData;
        $(displayMidrate).text(`${currencyPair} => ${midrate}`);
        $(displayRate).val(midrate);
        $(converted).val(convertedAmount);
        $(displayConverted).text(convertedAmount);
    }

    $("#conversion_currency").on("change", () => {
        if (!validateAll(transactionDetails.amount)) {
            toaster("Enter valid transfer amount", "warning");
            return false;
        }
        handleConversion($("#conversion_currency").val());
    });

    $("#onetime_toggle").on("click", function () {
        updateTransactionType();
        $(".display_to_account_name").text("");
        $(".display_to_account_no").text("");
        $(".display_to_account_currency").text("");
        $(".display_midrate").text("");
        $(".display_converted_amount").text("");
        $(".display_amount").text("");

        if (transactionType === "beneficiary") {
            $("#onetime_beneficiary_form").hide(300);
            $("#saved_beneficiary_form").show(300);
            $(".badge").hide(300);
            $(".select_beneficiary").show();
            $("#from_account").trigger("change");
            $("#to_account").trigger("change");
            $("#amount").trigger("change");
            $("#purpose").trigger("change");
            $("#category").trigger("change");
        }
        if (transactionType === "onetime") {
            $("#amount").val("");
            $("#onetime_beneficiary_form").show();
            $("#saved_beneficiary_form").hide(300);
            $(".select_beneficiary").hide(300);
            $(".badge").show(300);
            $("#onetime_from_account").trigger("change");
            $("#pnetome_to_account").trigger("change");
            $("#onetime_amount").trigger("change");
            $("#onetime_purpose").trigger("change");
            $("#onetime_category").trigger("change");
        }
    });

    // hide select accounts info
    $("#back_button").click(function (e) {
        e.preventDefault();
        $("#transaction_form").toggle();
        $("#transaction_summary").hide();
    });

    // {{-- Event on From Account field --}}
    $("#from_account").on("change", function () {
        fromAccount.info = $(this).val();
        if (!validateAll(fromAccount.info)) {
            $(".display_from_account_name").text("");
            $(".display_from_account_no").text("");
            $(".display_from_account_currency").text("");
            $(".display_transfer_currency").text("");
            return false;
        }
        if (fromAccount.info === toAccount.info) {
            toaster("can not transfer to same account", "warning", 3000);
            $(this).val("");
            return false;
        }

        let accountDetails = fromAccount.info.split("~");
        fromAccount.name = accountDetails[1].trim();
        fromAccount.accountNumber = accountDetails[2].trim();
        fromAccount.currency = accountDetails[3].trim();
        fromAccount.balance = parseFloat(accountDetails[4].trim());
        if (customerType === "c") {
            fromAccount.accountMandate = accountDetails[5].trim();
        }
        // set summary values for display
        const { name, accountNumber, currency, balance } = fromAccount;
        if (accountNumber === onetimeToAccount.accountNumber) {
            toaster("can not transfer to same account", "warning", 3000);
            $(this).val("");
            return false;
        }
        $(".display_from_account_name").text(name);
        $(".display_from_account_no").text(accountNumber);
        $(".display_from_account_currency").text(currency);
        $(".display_transfer_currency").text(currency);

        $(".account_currency").val(currency);
        $(".conversion_currency option").each(function () {
            if ($(this).val() === currency) {
                $(this).prop("selected", true);
            } else {
            }
        });

        $(".display_currency").text(currency); // set summary currency
        $(".display_from_account_amount").text(
            formatToCurrency(parseFloat(balance))
        );
        $(".from_account_display_info").show();
    });

    $("#to_account").on("change", function () {
        toAccount.info = $(this).val();
        if (!validateAll(toAccount.info)) {
            $(".to_account_display_info").hide();
            $(".display_to_account_name").text("");
            $(".display_to_account_no").text("");
            $(".display_to_account_currency").text("");
            return false;
        }
        if (toAccount.info === fromAccount.info) {
            toaster("can not transfer to same account", "warning", 3000);
            $(this).val("");
            return false;
        }
        let accountDetails = toAccount.info.split("~");
        toAccount.name = accountDetails[1].trim();
        toAccount.accountNumber = accountDetails[2].trim();
        toAccount.currency = accountDetails[3].trim();
        toAccount.email = accountDetails[4].trim();

        // set summary values for display
        const { name, accountNumber, currency, email } = toAccount;
        // set summary values for display
        $(".display_to_account_name").text(name);
        $(".display_to_account_no").text(accountNumber);
        $(".display_to_account_currency").text(currency);
        $("#saved_beneficiary_email").val(email);
        $("#saved_beneficiary_account_number").val(accountNumber);
        $("#saved_beneficiary_name").val(name);

        $(".to_account_display_info").show();

        // alert(to_account_info[0]);
    });

    $("#amount").on("keyup", function () {
        if (!validateAll(fromAccount.info, toAccount.info)) {
            toaster("Please select source and destination accounts", "warning");
            $(this).val("");
            return false;
        }
        transactionDetails.amount = parseFloat($(this).val()).toFixed(2);
        const { amount } = transactionDetails;

        if (amount <= 0 || amount === undefined) {
            toaster("invalid amount", "warning");
            $(this).val("");
        }
        if (isNaN(amount)) {
            $(".display_amount").text("");
        } else {
            $(".display_amount").text(amount);
        }

        handleConversion($("#conversion_currency").val());
    });

    $("#category").on("change", function () {
        if ($(this).val() === "others") {
            transactionDetails.category === $(this).val();
        } else {
            transactionDetails.category = $(this).val().split("~")[1];
        }
        $("#display_category").text(transactionDetails.category);
    });

    $("#purpose").on("keyup", function () {
        transactionDetails.purpose = $(this).val();
        $("#display_purpose").text(transactionDetails.purpose);
    });

    $("#onetime_amount").on("keyup", function () {
        if (!validateAll(fromAccount.info, onetimeToAccount.name)) {
            toaster("Please select source and destination accounts", "warning");
            $(this).val("");
            return false;
        }
        onetimeTransactionDetails.amount = parseFloat($(this).val()).toFixed(2);
        const { amount } = onetimeTransactionDetails;

        if (amount <= 0 || amount === undefined) {
            toaster("invalid amount", "warning");
            $(this).val("");
        }

        if (isNaN(amount)) {
            $(".display_amount").text("");
        } else {
            $(".display_amount").text(amount);
        }

        handleConversion($("#onetime_conversion_currency").val());
    });

    //category
    $("#onetime_category").on("change", function () {
        if ($(this).val() === "others") {
            onetimeTransactionDetails.category === $(this).val();
        } else {
            onetimeTransactionDetails.category = $(this).val().split("~")[1];
        }
        $("#display_category").text(onetimeTransactionDetails.category);
    });

    $("#onetime_account_number").on("keyup", function () {
        if (onetimeToAccount.accountNumber === $(this).val()) {
            return false;
        }
        if ($(this).val() === fromAccount.accountNumber) {
            toaster("Cannot send to same account", "warning");
            return false;
        }
        onetimeToAccount.accountNumber = $(this).val();
        if (onetimeToAccount.accountNumber > 17) {
            getAccountDescription(onetimeToAccount);
        }
    });

    $("#onetime_purpose").on("keyup", function () {
        onetimeTransactionDetails.purpose = $(this).val();
        $("#display_onetime_purpose").text(transactionDetails.purpose);
    });

    $("#onetime_beneficiary_email").on("keyup", function () {
        onetimeToAccount.email = $(this).val();
    });

    // NEXT BUTTON CLICK
    $("#next_button").on("click", function () {
        let tDetails = new Object();

        if (transactionType === "onetime") {
            onetimeToAccount.email = $("#onetime_beneficiary_email").val();
            if (!validateEmail(onetimeToAccount.email)) {
                toaster("Please enter valid beneficiary email", "warning");
                return false;
            }
            let { purpose, category, amount } = onetimeTransactionDetails;
            tDetails = {
                purpose,
                category,
                amount,
            };
            tDetails.beneficiaryEmail = onetimeToAccount.email;
            tDetails.beneficiaryName = onetimeToAccount.name;
            tDetails.beneficiaryAccount = onetimeToAccount.accountNumber;
        } else if (transactionType === "beneficiary") {
            let { purpose, category, amount } = transactionDetails;
            tDetails = {
                purpose,
                category,
                amount,
            };
            tDetails.beneficiaryEmail = toAccount.email;
            tDetails.beneficiaryName = toAccount.name;
            tDetails.beneficiaryAccount = toAccount.accountNumber;
        } else {
            somethingWentWrongHandler();
        }

        console.log(tDetails);
        if (tDetails.amount <= 0 || isNaN(tDetails.amount)) {
            toaster("invalid transfer amount", "warning");
            return false;
        }
        if (parseFloat(tDetails.amount) > parseFloat(fromAccount.balance)) {
            toaster("Insufficient account balance", "warning");
            return false;
        }
        if (
            !validateAll(
                fromAccount.info,
                tDetails.accountNumber,
                tDetails.amount,
                tDetails.category,
                tDetails.purpose
            )
        ) {
            toaster("Field must not be empty", "warning");
            return false;
        }

        tDetails.fromAccount = fromAccount.accountNumber;
        tDetails.beneficiaryName = bDetails.name;
        tDetails.toAccount = bDetails.accountNumber;
        tDetails.currency = fromAccount.currency;
        tDetails.beneficiaryEmail = bDetails.email;
        console.log(tDetails);
        validationsCompleted = true;
        $("#transaction_form").hide();
        $("#transaction_summary").show();
    });

    $("#confirm_modal_button").on("click", function (e) {
        e.preventDefault();
        if ($("#terms_and_conditions").is(":checked")) {
            $("#to_account_receipt").text(onetime_account_number);
            $(".receipt_currency").text(onetime_currency);
            $("#purpose_receipt").text(purpose);

            $("#amount_receipt").text(
                formatToCurrency(parseFloat(transfer_amount.trim()))
            );

            var user_pin = $("#user_pin").val();
            console.log(user_pin);

            $("#confirm_transfer").hide();
            $("#spinner").show();
            $("#spinner-text").show();
            $("#confirm_modal_button").prop("disabled", true);
            $("#from_account_receipt").text(from_account_);
            $("#to_account_receipt").text(to_account_);
            $("#display_purpose").text(purpose);
            $("#purpose_receipt").text(purpose);
            $(".receipt_currency").text(select_currency);

            $("#category_receipt").text(category);

            toaster("Accept Terms & Conditions to continue", "error");
            return false;
        }
    });
});

// $.ajax({
//     type: "POST",
//     url: "corporate-same-bank-api",
//     datatype: "application/json",
//     data: {
//         from_account: from_account_,
//         alias_name: onetime_beneficiary_name,
//         to_account: onetime_account_number,
//         account_currency: onetime_currency,
//         purpose: purpose,
//         beneficiary_email: onetime_beneficiary_email,
//         amount: transfer_amount,
//         schedule_payment_date: onetime_future_payement,
//         category: category,
//         account_mandate: account_mandate,
//     },
//     headers: {
//         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
//             "content"
//         ),
//     },
//     success: function (response) {
//         // {{-- console.log(response); --}}

//         if (response.responseCode == "000") {
//             $("#related_information_display").removeClass(
//                 "d-none d-sm-block"
//             );
//             Swal.fire("", response.message, "success");

//             setTimeout(function () {
//                 redirect_page();
//             }, 5000);

//             // $(".receipt").show();
//             // $(".form_process").hide();

//             $("#confirm_modal_button").hide();
//             $("#spinner").hide();
//             $("#spinner-text").hide();
//             $("#back_button").hide();
//             // $('#print_receipt').show();

//             $(".card_right").hide();
//             $(".success_gif").show();
//         } else {
//             toaster(response.message, "error", 10000);

//             $(".receipt").hide();

//             $("#confirm_transfer").show();
//             $("#confirm_modal_button").prop(
//                 "disabled",
//                 false
//             );
//             $("#spinner").hide();
//             $("#spinner-text").hide();
//             $("#back_button").show();
//             $("#print_receipt").hide();
//             // {{-- $("#related_information_display").addClass("d-none d-sm-block"); --}}
//             $("#related_information_display").show();
//             $(".success_gif").hide();
//         }
//     },
// });
