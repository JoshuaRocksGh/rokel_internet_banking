function get_account() {
    $.ajax({
        type: "GET",
        url: "get-my-account",
        datatype: "application/json",
        success: function (response) {
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
                    $("#to_account").append(
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
                                "~" +
                                formatToCurrency(
                                    parseFloat(data[index].availableBalance)
                                )
                        )
                    );
                });
            } else {
                toater(response.message, "warning", 3000);
                setTimeout(() => {
                    if (response.data == null) {
                        window.location = "logout";
                    }
                }, 1500);
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_account();
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
                if ("Others" == data[index].expenseName) {
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

var _cur_ = [];
var get_cur_1 = [];
var get_cur_2 = [];

function get_currency() {
    $.ajax({
        type: "GET",
        url: "get-currency-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            _cur_ = data;
            get_cur_1 = data;
            get_cur_2 = data;

            console.log(data);
            $.each(data, function (index) {
                $("#select_currency__").append(
                    $("<option>", {
                        value: data[index].isoCode,
                    }).text(data[index].isoCode)
                );
            });

            $("#select_currency__ option").each(function () {
                if ($(this).val() == "SLL") {
                    $(this).prop("selected", true);
                } else {
                }
            });
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_currency();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

var forex_rate = [];
var cur_1 = "SLL";
var cur_2 = "SLL";

function get_correct_fx_rate() {
    $.ajax({
        type: "GET",
        url: "get-correct-fx-rate-api",
        datatype: "application/json",
        success: function (response) {
            console.log("fx:");

            console.log(response.data);
            if (response.responseCode == "000") {
                forex_rate = response.data;
                console.log(forex_rate);
            } else {
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_correct_fx_rate();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

// function customer() {
//     var customerType = @json(session()->get('customerType'));
//     console.log(customerType);

//     if (customerType == 'C') {

//         $('#coporate_transfer_approval').show();
//         $('#personal_transfer_receipt').hide();
//     } else {
//         $('#personal_transfer_receipt').show();
//         $('#coporate_transfer_approval').hide();
//     }
// }

$(function () {
    let accountBalance = 0;
    let fromAccount = "";
    let toAccount = "";
    let amount = "";
    let category = "";
    let purpose = "";
    get_account();
    expenseTypes();
    get_currency();
    get_correct_fx_rate();

    if (customerType == "C") {
        $("#coporate_transfer_approval").show();
        $("#personal_transfer_receipt").hide();
    } else {
        $("#personal_transfer_receipt").show();
        $("#coporate_transfer_approval").hide();
    }

    let now = new Date();

    let day = ("0" + now.getDate()).slice(-2);
    let month = ("0" + (now.getMonth() + 1)).slice(-2);

    let today = now.getFullYear() + "-" + month + "-" + day;

    $("#future_payment").text(today).datepicker("setDate", new Date());

    // {{-- hide select accounts info --}}
    $(".from_account_display_info").hide();
    $(".to_account_display_info").hide();
    // $("#schedule_payment_date").hide();
    // $("#frequency").hide();
    // $("#schedule_payment_contraint_input").hide();

    $("#transaction_form").show();
    $("#transaction_summary").hide();

    $("#back_button").on("click", function (e) {
        e.preventDefault();
        $("#transaction_summary").hide();
        $("#transaction_form").show();
    });

    $("#from_account").on("change", function () {
        fromAccount = $(this).val();

        if (fromAccount == undefined || fromAccount.trim() == "") {
            $(".from_account_display_info").hide();
            $(".display_from_account_type").text("");
            $(".display_from_account_name").text("");
            $(".display_from_account_no").text("");
            $(".display_from_account_currency").text("");
            $(".display_currency").text(""); // set summary currency
            $(".display_from_account_amount").text("");
        } else {
            from_account_info = fromAccount.split("~");
            if (toAccount && fromAccount.trim() === toAccount.trim()) {
                toaster("Can not send to same account", "warning", 2000);
                $(this).val("");
                $(".display_from_account_type").text("");
                $(".display_from_account_name").text("");
                $(".display_from_account_no").text("");
                $(".display_from_account_currency").text("");
                $(".display_currency").text(""); // set summary currency
                $(".display_from_account_amount").text("");
                return false;
            }

            // set summary values for display
            $(".display_from_account_type").text(from_account_info[0]);
            $(".display_from_account_name").text(from_account_info[1]);
            $(".display_from_account_no").text(from_account_info[2]);
            $(".display_from_account_currency").text(from_account_info[3]);
            $("#select_currency").val(from_account_info[3]);
            $(".display_currency").text(from_account_info[3]); // set summary currency
            $(".display_from_account_amount").text(
                formatToCurrency(parseFloat(from_account_info[4]))
            );

            accountBalance = from_account_info[4].trim();

            $(".display_from_account_amount").text(
                formatToCurrency(parseFloat(from_account_info[4].trim()))
            );
            $(".from_account_display_info").show();
        }
    });

    $("#to_account").on("change", function () {
        toAccount = $(this).val();
        let toAccountInfo = "";
        if (toAccount.trim() == "" || toAccount.trim() == undefined) {
            $(".display_to_account_type").text("");
            $(".display_to_account_name").text("");
            $(".display_to_account_no").text("");
            $(".display_to_account_amount").text("");
            $(".display_to_account_currency").text("");

            return false;
        } else {
            toAccountInfo = toAccount.split("~");
            if (fromAccount && fromAccount.trim() == toAccount.trim()) {
                toaster("Can not send to same account", "warning", 2000);
                $(this).val("");
                $(".display_to_account_type").text("");
                $(".display_to_account_name").text("");
                $(".display_to_account_no").text("");
                $(".display_to_account_amount").text("");
                $(".to_account_display_info").hide();
                $(".display_to_account_currency").text("");
                return false;
            }
        }
        // set summary values for display
        $(".display_to_account_type").text(toAccountInfo[0]);
        $(".display_to_account_name").text(toAccountInfo[1]);
        $(".display_to_account_no").text(toAccountInfo[2]);
        $(".display_to_account_amount").text(
            formatToCurrency(parseFloat(toAccountInfo[4]))
        );
        $(".display_to_account_currency").text(toAccountInfo[3]);
        //$(".display_to_account_amount").text(formatToCurrency(parseFloat(toAccountInfo[4].trim())))
        $(".to_account_display_info").show();
    });

    function currency_convertor(forex_rate) {
        let amount = $("#amount").val();
        let convert_amount_currency = $("#select_currency__").val();
        let converted_amount = "";

        console.log(convert_amount_currency);

        cur_1 = $("#select_currency").val();
        cur_2 = $("#select_currency__").val();

        let currency_pair_1 = cur_1 + "/ " + cur_2;
        let currency_pair_2 = cur_2 + "/ " + cur_1;

        let to_local_currency = cur_1 + "/ SLL";
        let local_currency = "";

        $("#converted_amount").val("");
        $("#convertor_rate").val("");

        if (forex_rate.length > 0) {
            $.each(forex_rate, function (index) {
                if (
                    String(forex_rate[index].PAIR.trim()) ==
                    String(to_local_currency.trim())
                ) {
                    local_currency =
                        parseFloat(amount) /
                        parseFloat(forex_rate[index].MIDRATE);
                }

                if (
                    String(forex_rate[index].PAIR.trim()) ==
                    String(currency_pair_1.trim())
                ) {
                    converted_amount =
                        parseFloat(amount) *
                        parseFloat(forex_rate[index].MIDRATE);
                    $("#convertor_rate").val(
                        formatToCurrency(
                            parseFloat(forex_rate[index].MIDRATE.toFixed(2))
                        )
                    );
                    $(".display_midrate").text(
                        currency_pair_1.trim() +
                            " => " +
                            formatToCurrency(
                                parseFloat(forex_rate[index].MIDRATE.toFixed(2))
                            )
                    );
                    $("#converted_amount").val(
                        formatToCurrency(
                            parseFloat(converted_amount.toFixed(2))
                        )
                    );
                    $(".display_converted_amount").text(
                        convert_amount_currency +
                            " " +
                            formatToCurrency(
                                parseFloat(converted_amount.toFixed(2))
                            )
                    );
                    console.log(`match 1 => ${converted_amount}`);
                    console.log(parseFloat(forex_rate[index].MIDRATE));
                } else if (
                    String(forex_rate[index].PAIR.trim()) ==
                    String(currency_pair_2.trim())
                ) {
                    $("#convertor_rate").val(
                        formatToCurrency(
                            parseFloat(forex_rate[index].MIDRATE.toFixed(2))
                        )
                    );
                    $(".display_midrate").text(
                        currency_pair_2.trim() +
                            " => " +
                            formatToCurrency(
                                parseFloat(forex_rate[index].MIDRATE.toFixed(2))
                            )
                    );
                    converted_amount =
                        parseFloat(amount) /
                        parseFloat(forex_rate[index].MIDRATE);
                    $("#converted_amount").val(
                        formatToCurrency(
                            parseFloat(converted_amount.toFixed(2))
                        )
                    );
                    $(".display_converted_amount").text(
                        convert_amount_currency +
                            " " +
                            formatToCurrency(
                                parseFloat(converted_amount.toFixed(2))
                            )
                    );
                    console.log(`match 2 => ${converted_amount}`);
                    console.log(parseFloat(forex_rate[index].MIDRATE));
                } else {
                }
            });
        }
    }

    $("#select_currency__").on("change", function () {
        if (amount === "" || amount === undefined) {
            return false;
        }
        currency_convertor(forex_rate);
    });

    $("#amount").on("keyup", function () {
        if (fromAccount.trim() == "" || toAccount.trim() == "") {
            toaster(
                "Please select source and destination accounts",
                "error",
                3000
            );
            $(this).val("");
            return false;
        }
        console.log("a");

        amount = $(this).val();
        if (amount === "" || amount === undefined) {
            $(".display_transfer_amount").text("");
            // $(".display_from_account_currency").text("");
            $(".display_midrate").text("");
            $(".display_converted_amount").text("");
            return false;
        } else if (parseFloat(accountBalance) < parseFloat(amount)) {
            toaster("Insufficient account balance", "error", 3000);
            return false;
        } else {
            $(".display_transfer_amount").text(
                formatToCurrency(parseFloat(amount))
            );
            currency_convertor(forex_rate);
        }
    });

    function formatToCurrency(amount) {
        return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    }

    $("#next_button").on("click", function (e) {
        e.preventDefault();
        category = $("#category").val();
        purpose = $("#purpose").val();

        if (!validateAll(fromAccount, toAccount, amount, category, purpose)) {
            toaster("please complete all required fields", "warning", 3000);
            return false;
        }
        if (category !== "Others") {
            category = $("#category").val().split("~")[1];
        }
        $("#display_category").text(category);
        $("#display_purpose").text(purpose);

        $("#payment_details_form").hide();
    });

    $("#confirm_transfer").on("click", (e) => {
        e.preventDefault();

        // $('#confirm_modal_button').removeClass('data-toggle');
        if ($("#terms_and_conditions").is(":checked")) {
            console.log(customerType);

            if (customerType == "C") {
                $("#confirm_transfer").removeAttr("data-toggle");
                $("#confirm_transfer").hide();
                $("#spinner").show();
                $("#spinner-text").show();
                $("#confirm_modal_button").prop("disabled", true);

                var from_account_ = $("#from_account").val().split("~");
                var from_account = from_account_[2];
                var currency = from_account_[3];
                var account_mandate = from_account_[5];
                $("#from_account_receipt").text(from_account);

                var to_account_ = $("#to_account").val().split("~");
                console.log(to_account_);
                var to_account = to_account_[2];
                $("#to_account_receipt").text(to_account);

                var transfer_amount = $("#amount").val();
                $("#amount_receipt").text(
                    formatToCurrency(parseFloat(transfer_amount))
                );

                var select_currency = $("#select_currency").val();
                $(".receipt_currency").text(select_currency);

                var category = $("#category").val();
                if (category != "Others") {
                    var category_ = $("#category").val().split("~");
                    var category = category_[1];
                }
                $("#category_receipt").text(category);

                var purpose = $("#purpose").val();
                $("#display_purpose").text(purpose);
                $("#purpose_receipt").text(purpose);

                var schedule_payment_contraint_input = $(
                    "#schedule_payment_contraint_input"
                ).val();

                var schedule_payment_date = $("#schedule_payment_date").val();

                $.ajax({
                    type: "POST",
                    url: "corporate-own-account-api",
                    datatype: "application/json",
                    data: {
                        from_account: from_account,
                        to_account: to_account,
                        transfer_amount: transfer_amount,
                        purpose: purpose,
                        currency: currency,
                        schedule_payment_type: schedule_payment_contraint_input,
                        schedule_payment_date: schedule_payment_date,
                        account_mandate: account_mandate,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    success: function (response) {
                        console.log();
                        if (response.responseCode == "000") {
                            $("#related_information_display").removeClass(
                                "d-none d-sm-block"
                            );
                            Swal.fire("", response.message, "success");

                            $("#confirm_modal_button").hide();
                            $("#spinner").hide();
                            $("#spinner-text").hide();
                            $("#back_button").hide();
                            $("#print_receipt").show();

                            $(".rtgs_card_right").hide();
                            // {{-- $(".success_gif").show(); --}}
                        } else {
                            toaster(response.message, "error", 10000);

                            $(".receipt").hide();
                            // {{-- $(".form_process").hide(); --}}
                            // {{-- $('#confirm_modal_button').show(); --}}
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
                    error: function (xhr, status, error) {
                        $("#confirm_transfer").show();
                        $("#confirm_modal_button").prop("disabled", false);
                        $("#spinner").hide();
                        $("#spinner-text").hide();
                        $("#back_button").show();
                        $("#print_receipt").hide();
                        // {{-- $("#related_information_display").addClass("d-none d-sm-block"); --}}
                        $("#related_information_display").show();
                        $(".success_gif").hide();
                    },
                });
            } else {
                // {{-- alert('Personal Account'); --}}

                $("#transfer_pin").on("click", function (e) {
                    e.preventDefault();

                    $("#confirm_transfer").hide();
                    $("#spinner").show();
                    $("#spinner-text").show();
                    $("#confirm_modal_button").prop("disabled", true);

                    var from_account_ = $("#from_account").val().split("~");
                    console.log(from_account_);
                    var from_account = from_account_[2];
                    var from_account_currency = from_account_[3];
                    $("#from_account_receipt").text(from_account);

                    var to_account_ = $("#to_account").val().split("~");
                    console.log(to_account_);
                    var to_account = to_account_[2];
                    $("#to_account_receipt").text(to_account);

                    var transfer_amount = $("#amount").val();
                    $("#amount_receipt").text(
                        formatToCurrency(parseFloat(transfer_amount))
                    );

                    var select_currency = $("#select_currency").val();
                    $(".receipt_currency").text(select_currency);

                    var category = $("#category").val();
                    if (category != "Others") {
                        var category_ = $("#category").val().split("~");
                        var category = category_[1];
                    }

                    // {{-- $("#display_category").text(category); --}}
                    $("#category_receipt").text(category);

                    // {{-- var category = $('#category').val();
                    // $("#display_category").text(category[1]);
                    // $("#category_receipt").text(category[1]); --}}

                    var purpose = $("#purpose").val();
                    $("#display_purpose").text(purpose);
                    $("#purpose_receipt").text(purpose);

                    var schedule_payment_contraint_input = $(
                        "#schedule_payment_contraint_input"
                    ).val();

                    var schedule_payment_date = $(
                        "#schedule_payment_date"
                    ).val();

                    var select_frequency_ = $("#select_frequency").val();

                    var sec_pin = $("#user_pin").val();

                    $.ajax({
                        type: "POST",
                        url: "own-account-api",
                        datatype: "application/json",
                        data: {
                            from_account: from_account,
                            to_account: to_account,
                            account_currency: from_account_currency,
                            transfer_amount: transfer_amount,
                            // {{-- 'category': category, --}}
                            purpose: purpose,
                            schedule_payment_type:
                                schedule_payment_contraint_input,
                            schedule_payment_date: schedule_payment_date,
                            secPin: sec_pin,
                        },
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        success: function (response) {
                            console.log();
                            // {{-- console.log(response.responseCode) --}}
                            if (response.responseCode == "000") {
                                $("#related_information_display").removeClass(
                                    "d-none d-sm-block"
                                );
                                Swal.fire("", response.message, "success");

                                $(".receipt").show();
                                $(".form_process").hide();

                                $("#confirm_modal_button").hide();
                                $("#spinner").hide();
                                $("#spinner-text").hide();
                                $("#back_button").hide();
                                $("#print_receipt").show();

                                $(".rtgs_card_right").hide();
                                $(".success_gif").show();
                            } else {
                                toaster(response.message, "error", 10000);

                                $(".receipt").hide();
                                // {{-- $(".form_process").hide(); --}}
                                // {{-- $('#confirm_modal_button').show(); --}}
                                $("#confirm_transfer").show();
                                $("#confirm_modal_button").prop(
                                    "disabled",
                                    false
                                );
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
                });
            }
        } else {
            toaster("Accept Terms & Conditions to continue", "error", 6000);
            console.log("UNCHECKED");
            return false;
        }
    });
});
