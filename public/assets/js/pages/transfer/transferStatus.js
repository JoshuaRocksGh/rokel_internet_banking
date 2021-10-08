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
            targets: "_all",
            render: function (data, type, row) {
                return data && data.length > 45 && !data.includes("<b")
                    ? data.substr(0, 45) + "…"
                    : data;
            },
        },
    ],
};

function getTransferStatus(customerNumber) {
    $.ajax({
        type: "GET",
        url: "get-transfer-status",
        data: { customerNumber },
        datatype: "application/json",

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response.responseCode == "000") {
                console.log(response);
                let data = response.data;

                $("#transfer_status_body").empty();
                let table = $("#transfer_status_table").DataTable(
                    datatableOptions
                );
                console.log(table);
                $.each(data, function (i) {
                    // console.log(data[i]);
                    formattedAmount = `<b class="text-success">${formatToCurrency(
                        data[i].amount
                    )}<b>`;
                    extraData = JSON.stringify(data[i]);
                    console.log(extraData);
                    let button = `
                        <button type="button" class="btn btn-info btn-xs waves-effect waves-light" extra-data='${extraData}'> View Details</button>`;
                    table.row
                        .add([
                            data[i].postingDate,
                            data[i].beneficiaryName,
                            formattedAmount,
                            data[i].payerAccountDescription,
                            data[i].payerAccount,
                            data[i].status,
                            button,
                        ])
                        .order([0, "desc"])
                        .draw(false);
                });

                $("#transfer_status_table tbody").on(
                    "click",
                    "button",
                    function () {
                        let data = JSON.parse($(this).attr("extra-data"));
                        console.log(data);
                        $("#sender_name").val(data.payerAccountDescription);
                        $("#sender_account").val(data.payerAccount);
                        $("#sender_customer_number").val(
                            data.payerCustomerNumber
                        );
                        $("#beneficiary_name").val(data.beneficiaryName);
                        $("#beneficiary_account").val(data.beneficiaryAccount);
                        $("#beneficiary_bank").val(data.beneficiaryBank);
                        $("#transfer_amount").val(data.amount);
                        $("#batch_number").val(data.batchNumber);
                        $("#transfer_channel").val(data.channel);
                        $("#transfer_date").val(data.postingDate);
                        $("#transfer_stage").val(data.stage);
                        $("#transfer_status").val(data.status);
                        $("#transfer_status_modal").modal("show");
                    }
                );
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getTransferStatus(customerNumber);
            }, $.ajaxSetup().retryAfter);
        },
    });
}

$(document).ready(function () {
    $(".transfer_tab_btn").click(function () {
        getTransferStatus(customerNumber);
    });

    getTransferStatus(customerNumber);
});
