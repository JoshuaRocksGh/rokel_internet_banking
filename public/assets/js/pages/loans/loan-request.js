function getOptions(optionUrl, optionId, data) {
    $.ajax({
        type: "GET",
        data: data,
        url: optionUrl,
        datatype: "application/json",
        success: (response) => {
            let data = response.data;
            $.each(data, (index) => {
                $(optionId).append(
                    $("<option>", {
                        value: data[index].code,
                    }).text(data[index].name)
                );
            });
        },
        error: (xhr, status, error) => {
            console.log(optionUrl);
            console.log(error);
            setTimeout(() => {
                getOptions(optionUrl, optionId);
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function getAccountDetails() {
    $.ajax({
        type: "GET",
        url: "get-accounts-api",
        datatype: "application/json",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    }).done((response) => {
        console.log("a");
        console.log(response);
        if (response.responseCode === "000") {
            console.log(response.data);
        }
    });
}

function getLoanQuotationDetails(loanData) {
    $.ajax({
        type: "POST",
        url: "loan-quotation-details",
        datatype: "application/json",
        data: loanData,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response.responseCode === "000") {
                let table = $(".loan_payment_schedule").DataTable();
                // var nodes = table.rows().nodes();
                let data = response.data.loanSchedule;
                $("#request_form_div").hide();
                $(".disappear-after-success").hide();
                $("#loan_request_detail_div").show();
                $(".success-message").show();
                $("#loan_request_detail_div").hide();
                $(".success-message").hide();
                $(".appear-button").show();
                $("#atm_request_summary").hide();
                $("#payment_schedule").show();
                $(".spinner-load").hide();
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
                $(".spinner-load").hide();
                $(".submit-text").show();
            }
        },
        error: function (xhr, status, error) {
            $("#submit").attr("disabled", false);
            $(".spinner-load").hide();
            $("#log_in").show();
            $("#error_message").text("Connection Error");
            $("#failed_login").show();
        },
    });
}

function loanRequestSubmission() {}

$(() => {
    // $(".loan-detail").show();

    setTimeout((e) => {
        getAccountDetails();
        getOptions("get-loan-products-api", "#loan_product");
        getOptions("get-loan-frequencies-api", ".loan_frequencies");
        getOptions("get-interest-types-api", "#interest_rate_type");
        getOptions("get-loan-intro-source-api", "#loan_intro_source");
        getOptions("get-loan-sectors-api", "#loan_sectors");
        getOptions("get-loan-purpose-api", "#loan_purpose");
    }, 1000);
    let loanData = new Object();
    let detailedLoanForm;

    $("#loan_product").on("change", (e) => {
        loanData.loanProduct = $("#loan_product option:selected").text();
        loanData.loanProductCode = $("#loan_product option:selected").val();
        $(".display_loan_product").text(loanData.loanProduct);
    });

    $("#loan_amount").on("input", (e) => {
        loanData.loanAmount = $("#loan_amount").val();
        $(".display_loan_amount").text(loanData.loanAmount);
    });

    $("#tenure_in_months").on("input", (e) => {
        loanData.tenureInMonths = $("#tenure_in_months").val();
        $(".display_tenure_in_months").text(loanData.tenureInMonths);
    });

    $("#interest_rate_type").on("change", (e) => {
        loanData.interestRateType = $(
            "#interest_rate_type option:selected"
        ).text();
        loanData.interestRateTypeCode = $(
            "#interest_rate_type option:selected"
        ).val();
        $(".display_interest_rate_type").text(loanData.interestRateType);
    });

    $("#principal_repay_freq").on("change", (e) => {
        loanData.principalRepayFreq = $(
            "#principal_repay_freq option:selected"
        ).text();
        loanData.principalRepayFreqCode = $(
            "#principal_repay_freq option:selected"
        ).val();
        $(".display_principal_repay_freq").text(loanData.principalRepayFreq);
    });

    $("#interest_repay_freq").on("change", (e) => {
        loanData.interestRepayFreq = $(
            "#interest_repay_freq option:selected"
        ).text();
        loanData.interestRepayFreqCode = $(
            "#interest_repay_freq option:selected"
        ).val();
        $(".display_interest_repay_freq").text(loanData.interestRepayFreq);
    });
    $("#loan_purpose").on("change", (e) => {
        loanData.loanPurpose = $("#loan_purpose option:selected").text();
        loanData.loanPurposeCode = $("#loan_purpose option:selected").val();
        $(".display_loan_purpose").text(loanData.loanPurpose);
    });
    $("#loan_sectors").on("change", () => {
        loanData.loanSectors = $("#loan_sectors option:selected").text();
        loanData.loanSectorsCode = $("#loan_sectors option:selected").val();
        if (loanData.loanSectorCode === "") {
            $(".loan-sub-sectors-div").hide(300);
        } else {
            $("#loan_sub_sectors")
                .empty()
                .append(
                    '<option value="" disabled selected hidden>Select the sub sector</option>'
                );
            getOptions(
                "get-loan-sub-sectors-api",
                "#loan_sub_sectors",
                loanData
            );
            $(".loan-sub-sectors-div").show(300);
        }
        $(".display_loan_sectors").text(loanData.loanSectors);
    });

    $("#loan_intro_source").on("change", (e) => {
        loanData.loanIntroSource = $(
            "#loan_intro_source option:selected"
        ).text();
        loanData.loanIntroSourceCode = $(
            "#loan_intro_source option:selected"
        ).val();
        $(".display_loan_intro_source").text(loanData.loanIntroSource);
    });
    $("#loan_sub_sectors").on("change", (e) => {
        loanData.loanSubSectors = $("#loan_sub_sectors option:selected").text();
        loanData.loanSubSectorsCode = $(
            "#loan_sub_sectors option:selected"
        ).val();
        $(".display_loan_sub_sectors").text(loanData.loanSubSectors);
    });

    $("#btn_proceed_to_loan").on("click", (e) => {
        $("#payment_schedule").toggle();
        $("#request_form_div").toggle(500);
        $("#atm_request_summary").toggle(500);
        $(".loan-detail").toggle(500);
        $(".spinner-load").hide();
        detailedLoanForm = true;
    });

    $("#btn_submit_loan_quotation").on("click", (e) => {
        if (detailedLoanForm) {
            loanRequestSubmission();
            detailedLoanForm = false;
        }

        if (
            validateAll(
                loanData.loanProductCode,
                loanData.loanAmount,
                loanData.tenureInMonths,
                loanData.principalRepayFreqCode,
                loanData.interestRateTypeCode,
                loanData.interestRepayFreqCode
            )
        ) {
            $(".submit-text").hide();
            $(".spinner-load").show();

            // get loan quotation details
            getLoanQuotationDetails(loanData);
        } else {
            toaster("Please fill all required fields", "warning", );
        }
    });
});
