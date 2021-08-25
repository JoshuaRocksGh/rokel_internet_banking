function getOptions(optionUrl, optionId, data) {
    $.ajax({
        type: "GET",
        data: data,
        url: optionUrl,
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            $.each(data, function (index) {
                $(optionId).append(
                    $("<option>", {
                        value: data[index].code,
                    }).text(data[index].name)
                );
            });
        },
        error: function (xhr, status, error) {
            console.log(optionUrl);
            console.log(error);
            setTimeout(function () {
                getOptions(optionUrl, optionId);
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function loanRequestSubmission() {}

$(function () {
    // $("#spinner-text").hide();
    // $("#spinner").hide();
    // $(".display_button_print").hide();
    // $("#payment_schedule").hide();
    setTimeout(function () {
        getOptions("get-loan-products-api", "#loan_product");
        getOptions("get-loan-frequencies-api", ".loan_frequencies");
        getOptions("get-interest-types-api", "#interest_rate_type");
        getOptions("get-loan-intro-source-api", "#loan_intro_source");
        getOptions("get-loan-sectors-api", "#loan_sectors");
        getOptions("get-loan-purpose-api", "#loan_purpose");
    }, 1000);
    let loanData = new Object();
    // $(".success-message").hide();
    // $(".appear-button").hide();
    let detailedLoanForm;
    $("#loan_product").on("change", function () {
        let optionText = $("#loan_product option:selected").text();
        $(".display_loan_product").text(optionText);
    });

    $("#loan_amount").on("input", function () {
        let loan_amount = $("#loan_amount").val();
        $(".display_loan_amount").text(loan_amount);
    });

    $("#tenure_in_months").on("input", function () {
        let tenure_in_months = $("#tenure_in_months").val();
        $(".display_tenure_in_months").text(tenure_in_months);
    });

    $("#interest_rate_type").on("change", function () {
        let optionText = $("#interest_rate_type option:selected").text();
        $(".display_interest_rate_type").text(optionText);
    });

    $("#principal_repay_freq").on("change", function () {
        let optionText = $("#principal_repay_freq option:selected").text();
        $(".display_principal_repay_freq").text(optionText);
    });

    $("#interest_repay_freq").on("change", function () {
        let optionText = $("#interest_repay_freq option:selected").text();
        $(".display_interest_repay_freq").text(optionText);
    });
    $("#loan_purpose").on("change", function () {
        let optionText = $("#loan_purpose option:selected").text();
        $(".display_loan_purpose").text(optionText);
    });
    $("#loan_sectors").on("change", function () {
        let optionText = $("#loan_sectors option:selected").text();
        loanData.sectorCode = $("#loan_sectors option:selected").val();
        if (loanData.sectorCode === "") {
            $(".loan-sub-sectors-div").hide(300);
        } else {
            $("#loan_sub_sectors").text("");
            $("#loan_sub_sectors").attr("placeholder", "Select The Sub Sector");
            getOptions(
                "get-loan-sub-sectors-api",
                "#loan_sub_sectors",
                loanData
            );
            $(".loan-sub-sectors-div").show(300);
        }
        $(".display_loan_sectors").text(optionText);
    });

    $("#loan_intro_source").on("change", function () {
        let optionText = $("#loan_intro_source option:selected").text();
        $(".display_loan_intro_source").text(optionText);
    });
    $("#loan_sub_sectors").on("change", function () {
        let optionText = $("#loan_sub_sectors option:selected").text();
        $(".display_loan_sub_sectors").text(optionText);
    });
    // $("#pin").keyup(function(){
    //     var pin = $("#pin").val();
    //     console.log(pin);
    // })

    $("#btn_proceed_to_loan").on("click", function () {
        $("#payment_schedule").toggle();
        $("#request_form_div").toggle(500);
        $("#atm_request_summary").toggle(500);
        $(".loan-detail").toggle(500);
        $(".spinner-load").hide();
        detailedLoanForm = true;
    });

    $("#btn_submit_loan_quotation").on("click", function () {
        //collect loan details
        let loan_product = $("#loan_product").val();
        let loan_amount = $("#loan_amount").val();
        let tenure_in_months = $("#tenure_in_months").val();
        let interest_rate_type = $("#interest_rate_type").val();
        let principal_repay_freq = $("#principal_repay_freq").val();
        let interest_repay_freq = $("#interest_repay_freq").val();

        let table = $(".loan_payment_schedule").DataTable();
        var nodes = table.rows().nodes();
        if (detailedLoanForm) {
            loanRequestSubmission();
            detailedLoanForm = false;
        }
        // console.log("loan product: " + loan_product);
        // console.log("loan amount: " + loan_amount);
        // console.log("interest rate type: " + interest_rate_type);
        // console.log("principal repay frequency: " + principal_repay_freq);
        // console.log("Interest repay frequency " + interest_repay_freq);

        if (
            loan_product == "" ||
            loan_amount == "" ||
            tenure_in_months == "" ||
            interest_rate_type == "" ||
            principal_repay_freq == "" ||
            interest_repay_freq == ""
        ) {
            toaster("Please fill all required fields", "error", 2000);
        } else {
            $(".submit-text").hide();
            $(".spinner-load").show();

            // $(".spinner-border").show();
            // $("#spinner-text").show();

            $.ajax({
                type: "POST",
                url: "loan-quotation-details",
                datatype: "application/json",
                data: {
                    loan_product: loan_product,
                    loan_amount: loan_amount,
                    tenure_in_months: tenure_in_months,
                    interest_rate_type: interest_rate_type,
                    principal_repay_freq: principal_repay_freq,
                    interest_repay_freq: interest_repay_freq,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    if (response.responseCode == "000") {
                        // toaster(response.message, "success", 2000);
                        let data = response.data.loanSchedule;
                        $("#request_form_div").hide();
                        $(".disappear-after-success").hide();
                        // $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" />');
                        // $(".success-message").hide(30000);
                        $("#loan_request_detail_div").show();
                        $(".success-message").show();
                        $("#loan_request_detail_div").hide();
                        $(".success-message").hide();
                        $(".appear-button").show();
                        $("#atm_request_summary").hide();
                        $("#payment_schedule").show();
                        // $(".submit-text").hide();
                        // $(".spinner-border").hide();
                        $(".spinner-load").hide();
                        // // console.log(data); return false;
                        // let data = data.loanSchedule;

                        // var count = count + 1;
                        $.each(data, function (index) {
                            model_data = data[index];
                            table.row
                                .add([
                                    index + 1,
                                    data[index].repaymentDate,
                                    data[index].principalRepayment,
                                    data[index].interestRepayment,
                                    data[index].totalRepayment,
                                ])
                                .draw(false);
                        });
                    } else {
                        toaster(response.message, "error", 2000);
                        toaster("resubmit your loan request", "error", 2000);
                        // $("#spinner").hide();
                        // $("#spinner-text").hide();
                        $(".spinner-load").hide();
                        $(".submit-text").show();
                    }
                },
                error: function (xhr, status, error) {
                    $("#submit").attr("disabled", false);
                    // $("#spinner").hide();
                    // $("#spinner-text").hide();
                    $(".spinner-load").hide();
                    $("#log_in").show();
                    $("#error_message").text("Connection Error");
                    $("#failed_login").show();
                },
            });
        }
    });

    // $("#btn_submit_new_loan_request").click(function(){
    //     $(".disappear-after-success").toggle();

    // });
});
