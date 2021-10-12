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
                    const { paymentType, description } = data[i];
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
                    // <div class="avatar-sm rounded-circle bg-white ">
                    //     <i class="fe-smartphone text-white font-20 avatar-title text-danger"></i>
                    // </div>
                    let paymentCard = `<div class=" mx-2 display-card payments ${color[i]}">
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
    payments.forEach((item) => {
        item.addEventListener("click", (e) => {
            card = e.currentTarget;
            console.log(card);
            // card.classList.add('card--opened');
            // document.querySelector('body').classList.add('no-scroll');
        });
    });
}

$(document).ready(function () {
    //             $(document).ready(function(){
    //   $('.owl-carousel').slick();
    // });
    setTimeout(function () {
        paymentType();
    }, 200);
});
