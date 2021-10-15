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
                    let subTypes = JSON.stringify(paySubTypes);
                    let paymentCard = `<div class=" mx-2 display-card payments ${color[i]}" data-label='${label}' data-subTypes='${subTypes}'>
                    <span class="box-circle"></span>
                    <span class="mt-1 text-white payments-text" id=${paymentType}>${description}</span>
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
function initPaymentsCarousel() {
    $(".payments-carousel").slick({
        slidesToShow: 5,
        // variableWidth: true,
        //   infinite: false,
        focusOnSelect: true,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 3,
                    centerMode: true,
                },
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                },
            },
            {
                breakpoint: 550,
                settings: {
                    centerMode: false,
                    slidesToShow: 1,
                },
            },
        ],
    });

    let payments = document.querySelectorAll(".payments");
    payments.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            card = e.currentTarget;
            const subTypes = JSON.parse($(card).attr("data-subTypes"));
            const label = $(card).attr("data-label");
            $("#payment-select").empty();
            $("#payment-select").append(
                `<option selected disabled class="text-capitalize"> --- ${label} --- </option>`
            );
            subTypes.forEach((subType, i) => {
                let {
                    paymentLabel,
                    paymentCode,
                    paymentAccount,
                    paymentDescription,
                } = subType;
                paymentLabel = paymentLabel.toLowerCase();
                paymentDescription = paymentDescription.toLowerCase();
                $("#subtype_label").val(paymentLabel).text(paymentLabel);
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

$(document).ready(function () {
    paymentType();
});
