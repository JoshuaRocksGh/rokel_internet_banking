function paymentType() {
    $.ajax({
        type: "GET",
        url: "get-payment-types-api",
        datatype: "application/json",
        success: function (response) {
            $("#loader").hide();

            let data = response.data.data;
            if (data.length > 0) {
                $.each(data, function (i) {
                    const { label, paySubTypes, paymentType, description } =
                        data[i];
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
                    paySubTypes.forEach((e) => {
                        delete e.paymentLogo;
                    });
                    let subTypes = JSON.stringify(paySubTypes);
                    let beneList = JSON.stringify(new Array());
                    let paymentCard = `<div class=" mx-2 my-2 display-card payments ${color[i]}"  id='${paymentType}_card' data-span="${paymentType}">
                    <span class="box-circle"></span>
                    <span class="mt-1 text-white payments-text" id='${paymentType}_text'>${description}</span>
                    <span id='${paymentType}_data' data-bene-list='${beneList}' data-label='${label}' data-subTypes='${subTypes}' hidden disabled style="display:none"></span>
        </div>`;
                    $(".payments-carousel").append(paymentCard);
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

function getPaymentBeneficiaries() {
    $.ajax({
        type: "GET",
        url: "payment-beneficiary-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            if (data.length > 0) {
                $.each(data, (i) => {
                    let { paymentType } = data[i];
                    beneficiary = JSON.stringify(data[i]);
                    // $(`${paymentType}_card`).attr("data-bene");
                });
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
    // $(".payments-carousel").slick({
    //     slidesToShow: 5,
    //     // variableWidth: true,
    //     //   infinite: false,
    //     focusOnSelect: true,
    //     centerMode: true,
    //     responsive: [
    //         {
    //             breakpoint: 1300,
    //             settings: {
    //                 slidesToShow: 3,
    //                 centerMode: true,
    //             },
    //         },
    //         {
    //             breakpoint: 780,
    //             settings: {
    //                 slidesToShow: 3,
    //                 centerMode: false,
    //             },
    //         },
    //         {
    //             breakpoint: 550,
    //             settings: {
    //                 centerMode: false,
    //                 slidesToShow: 1,
    //             },
    //         },
    //     ],
    // });

    let payments = document.querySelectorAll(".payments");
    payments.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            card = e.currentTarget;
            dataspan = "#" + $(card).attr("data-span") + "_data";
            const subTypes = JSON.parse($(dataspan).attr("data-subTypes"));
            const label = $(dataspan).attr("data-label").toLowerCase();
            console.log($(dataspan));
            $("#subtype_select").empty();
            $("#subtype_select").append(
                `<option selected disabled class="text-capitalize"> --- ${label} --- </option>`
            );
            $("#subtype_label").val(label).text(label);
            subTypes.forEach((subType, i) => {
                let {
                    paymentLabel,
                    paymentCode,
                    paymentAccount,
                    paymentDescription,
                } = subType;
                paymentLabel = paymentLabel.toLowerCase();
                paymentDescription = paymentDescription.toLowerCase();
                $("#payment_label").val(paymentLabel).text(paymentLabel);
                $("#payment_label_input").attr(
                    "placeholder",
                    `Enter ${paymentLabel}`
                );
                let option = `<option class="text-capitalize" value='${paymentCode}~${paymentAccount}'> ${paymentDescription}</option> `;
                $("#subtype_select").append(option);
                $("#subtype_div").show();
            });
        });
        if (i === 0) {
            $(item).trigger("click");
        }
    });
}

$(() => {
    paymentType();
    getPaymentBeneficiaries();
});
