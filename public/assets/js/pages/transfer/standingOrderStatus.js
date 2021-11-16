let datatableOptions = {
    destroy: true,
    // lengthChange: false,
    pageLength: 5,
    // searching: false,
    // scrollY: "500px",
    // info: false,
    // "scrollX":        true,
    // scrollCollapse: true,
    // paging: false,
    columnDefs: [
        {
            targets: [3, 4, 6, 7],
            render: (data) => data.split(" ")[0],
        },
        {
            targets: "_all",
            render: function (data, type, row) {
                return data && data.length > 45 && !data.includes("<b")
                    ? data.substr(0, 45) + "…"
                    : data;
            },
        },
    ],
};

function getStandingOrderStatus(accountNumber) {
    siteLoading("show");
    $.ajax({
        type: "POST",
        url: "get-standing-order-status-api",
        data: { accountNumber },
        datatype: "application/json",

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            $("#standing_order_display_area tbody").empty();
            if (response.responseCode == "000") {
                let data = response.data;
                let table = $("#standing_order_display_area").DataTable(
                    datatableOptions
                );
                $.each(data, function (i, e) {
                    formattedAmount = `<b class="text-success">${formatToCurrency(
                        e.dueAmount
                    )}<b>`;
                    extraData = JSON.stringify(e);
                    table.row
                        .add([
                            e.accountNumber,
                            e.beneficiaryAccount,
                            formattedAmount,
                            e.orderDate,
                            e.expiryDate,
                            e.frequency,
                            e.firstPaymentDate,
                            e.lastPaymentDate,
                            e.orderNumber,
                        ])
                        .order([0, "desc"])
                        .draw(false);
                });
            } else {
                toaster(response.message, "warning");
                $("#standing_order_display_area tbody").append(
                    `<td colspan="100%" class="text-center">
                    ${noDataAvailable} </td>`
                );
                $("#no_data_available_img").css("max-width", "200px");
            }
            siteLoading("hide");
        },
        // error: function (xhr, status, error) {
        //     setTimeout(function () {
        //         getStandingOrderStatus(accountNumber);
        //     }, $.ajaxSetup().retryAfter);
        // },
    });
}

$(document).ready(function () {
    $("#from_account").on("change", function () {
        console.log("here");
        let accountNumber = $("#from_account option:selected").attr(
            "data-account-number"
        );
        getStandingOrderStatus(accountNumber);
    });
    $("#from_account").trigger("change");
});
