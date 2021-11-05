const pageData = new Object();
function paymentType() {
    $.ajax({
        type: "GET",
        url: "get-payment-types-api",
        datatype: "application/json",
        success: function (response) {
            $("#loader").hide();
            let data = response.data.data;
            pageData.payTypes = [];
            if (data.length > 0) {
                $.each(data, function (i) {
                    const type = data[i].paymentType;
                    pageData.payTypes.push(type);
                    pageData["pay_" + type] = data[i];
                    const { label, paymentType, description } = data[i];
                    let color = [
                        "bg-success",
                        "bg-info",
                        "bg-warning",
                        "bg-danger",
                        "bg-primary",
                        "bg-pink",
                        "bg-blue",
                        "bg-secondary",
                        "bg-dark",
                    ];
                    if (!label) return;
                    let paymentCard = `<div class="display-card payments ${color[i]}"  id='${paymentType}_card' data-span="${paymentType}">
                    <span class="box-circle"></span>
                    <span id='${paymentType}_text'>${description}</span>
        </div>`;
                    $(".payments-carousel").append(paymentCard);
                });
                getPaymentBeneficiaries();
            } else {
                return false;
            }
        },
        error: function (xhr, status, error) {
            $("#loader").show();

            setTimeout(function () {
                paymentType();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function getPaymentBeneficiaries() {
    $.ajax({
        type: "GET",
        url: "payment-beneficiary-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            console.log(data);
            if (data.length > 0) {
                $.each(pageData.payTypes, (i) => {
                    const type = pageData.payTypes[i];
                    pageData["bene_" + type] = data.filter(
                        (e) => e.PAYMENT_TYPE === type
                    );
                });
                initPaymentsCarousel();
            } else {
                return false;
            }
        },
        error: function (xhr, status, error) {
            $("#loader").show();

            setTimeout(function () {
                paymentType();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function initPaymentsCarousel() {
    let payments = document.querySelectorAll(".payments");
    payments.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            $(".payments").removeClass("current-type");
            const type = $(e.currentTarget).attr("data-span");
            $(e.currentTarget).addClass("current-type");

            //populate beneficiaries
            $("#to_account");
            populateBeneficiariesSelect(type);
            populateSubtypesSelect(type);
        });
        if (i === 0) {
            $(item).trigger("click");
        }
    });
    siteLoading("hide");
}
function populateBeneficiariesSelect(type) {
    const beneData = pageData["bene_" + type];

    $("#to_account").empty();
    if (beneData.length < 1) {
        $("#to_account").append(noSavedBeneficiariesOption);
    } else {
        $("#to_account").append(
            `<option selected disabled> --- Select Beneficiary --- </option>`
        );
        beneData.forEach((bene, i) => {
            let { ACCOUNT, NICKNAME, PAYEE_NAME } = bene;
            const paymentLogo = pageData["pay_" + type].paySubTypes.find(
                (e) => e.paymentCode === PAYEE_NAME
            ).paymentLogo;
            let logo = paymentLogo
                ? "data:image/jpg;base64," + paymentLogo
                : "assets/images/add.png";
            let content = `<span class='row text-capitalize'><img src='${logo}' class='ml-2 mr-3' style='width:2rem'><span class='mr-3'>${ACCOUNT}</span> <span>${NICKNAME}</span></span>`;
            let option = `<option data-content="${content}" data-type='${PAYEE_NAME}' value='${ACCOUNT}'> </option> `;
            $("#to_account").append(option);
        });
    }
    $("#to_account").selectpicker("refresh");
}

function populateSubtypesSelect(type) {
    // populate subtypes
    const typeData = pageData["pay_" + type];
    let { label } = typeData;
    label = label.toLowerCase();
    $("#subtype_select").empty();
    $("#subtype_select").append(
        `<option selected disabled class="text-capitalize"> --- ${label} --- </option>`
    );
    $("#subtype_label").val(label).text(label);
    typeData.paySubTypes.forEach((e, i) => {
        let { paymentLabel, paymentCode, paymentDescription, paymentLogo } = e;
        let logo = paymentLogo
            ? "data:image/jpg;base64," + paymentLogo
            : "assets/images/add.png";
        paymentLabel = paymentLabel.toLowerCase();
        paymentDescription = paymentDescription.toLowerCase();
        $("#payment_label").val(paymentLabel).text(paymentLabel);
        $("#payment_label_input").attr("placeholder", `Enter ${paymentLabel}`);
        let content = `<span class='text-capitalize'><img src='${logo}' class='mx-2' style='width:2rem'>${paymentDescription}</span>`;
        let option = `<option data-content="${content}"  value='${paymentCode}'> </option> `;
        $("#subtype_select").append(option);
        $("#subtype_div").show();
        return;
    });
    $("#subtype_select").selectpicker("refresh");
}

$(() => {
    let isOnetimePayment = false;
    let paymentInfo = new Object();
    siteLoading("show");
    paymentType();
    $(".form-control").selectpicker("refresh");

    function updateTransactionType(type) {
        if (type === "onetime") {
            isOnetimePayment = true;
        } else if (type === "beneficiary") {
            isOnetimePayment = false;
        }
    }

    $("#beneficiary_tab").on("click", () => {
        updateTransactionType("beneficiary");
        $(".display_to_account").text("");
        $("#to_account").trigger("change");
    });

    $("#onetime_tab").on("click", () => {
        updateTransactionType("onetime");
        $(".display_to_account").text("");
        $("#to_account").trigger("change");
    });

    $("#confirm_transfer_button").on("click", (e) => {
        e.preventDefault();
        $("#centermodal").modal("show");
    });

    $("#next_button").on("click", (e) => {
        e.preventDefault();
        let account = $("#from_account").val();
        let amount = $("#amount").val();
        let beneficiaryAccount, payeeName;

        if (!isOnetimePayment) {
            console.log(isOnetimePayment);
            beneficiaryAccount = $("#to_account").val();
            payeeName = $("#to_account option:selected").attr("data-type");
        } else {
            payeeName = $("#subtype_select").val();
            beneficiaryAccount = $("#onetime_to_account").val();
        }
        console.table({ amount, account, beneficiaryAccount, payeeName });
        if (!amount || !account || !beneficiaryAccount || !payeeName) {
            toaster("all fields required", "warning");
            return;
        }
        transferInfo = {
            amount,
            account,
            beneficiaryAccount,
            payeeName,
        };

        $("#payment_verification_modal").modal("show");
    });

    $("#transfer_pin").on("click", (e) => {
        e.preventDefault;
        paymentInfo.secPin = $("#user_pin").val();
        if (paymentInfo.secPin.length !== 4) {
            toaster("invalid pin", "warning");
            return false;
        }
        makePayment(endPoint, transferInfo);
        $("#user_pin").val("").text("");
    });
});
