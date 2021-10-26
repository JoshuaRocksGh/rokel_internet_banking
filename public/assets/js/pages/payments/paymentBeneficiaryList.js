const pageData = new Object();
function getBeneficiaryList() {
    $.ajax({
        tpye: "GET",
        url: "payment-beneficiary-list-api",
        datatype: "application/json",
        success: function (response) {
            if (response.responseCode == "000") {
                const data = response.data;
                console.log(data);
                $.each(data, function (i) {
                    const type = data[i].PAYMENT_TYPE;
                    if (!pageData["bene_" + type]) {
                        pageData["bene_" + type] = [];
                    }
                    pageData["bene_" + type].push(data[i]);
                });
                drawBeneficiaryTable();
            } else {
                $("#beneficiary_table").hide();
                $("#beneficiary_list_loader").hide();
                $("#beneficiary_list_retry_btn").show();
            }
        },
    });
}

function getPaymentTypes() {
    $.ajax({
        tpye: "GET",
        url: "get-payment-types-api",
        datatype: "application/json",
        success: function (response) {
            if (response.responseCode == "000") {
                const data = response.data.data;
                $.each(data, function (i) {
                    console.log(data[i]);
                    const type = data[i].paymentType;
                    pageData["pay_" + type] = data[i];
                });
            } else {
            }
        },
    });
}
function beneficiarySaved() {
    Swal.fire({
        width: 300,
        title: "<h2 class='text-success font-16 font-weight-bold'>Beneficiary Saved</h2>",
        imageUrl: "assets/images/animations/sprinkles.gif",
        imageHeight: 100,
        confirmButtonColor: "#1abc9c",
    });
    getBeneficiaryList();
}
function beneficiaryDeleted() {
    Swal.fire({
        width: 300,
        title: "<h2 class='text-danger font-16 font-weight-bold'>Beneficiary Deleted</h2>",
        imageUrl: "assets/images/animations/delete-message.gif",
        imageHeight: 100,
        confirmButtonColor: "#dc3545",
    });
    getBeneficiaryList();
}
function drawBeneficiaryTable() {
    let table = $("#beneficiary_list")
        .DataTable({
            destroy: true,
            columnDefs: [
                {
                    targets: "_all",
                    orderable: false,
                },
            ],
        })
        .clear();
    let noBeneficiaries = noDataAvailable.replace("Data", "Beneficiaries");
    let data = [];
    $("#beneficiary_list tbody").empty();
    const currentType = $(".current-type").attr("data-value");
    data = pageData["bene_" + currentType];
    if (data.length < 1) {
        $("#beneficiary_list tbody")
            .append(`<td colspan="100%" class="text-center">
        ${noBeneficiaries} </td>`);
        return;
    }
    $.each(data, (index) => {
        beneData = JSON.stringify(data[index]);
        table.row
            .add([
                data[index].NICKNAME,
                data[index].ACCOUNT,
                data[index].PAYEE_NAME,
                `<a class='edit-beneficiary' style="display:flex; place-content:center;" href="#" data-value='${beneData}'> <span class="fe-edit noti-icon text-info"></span></a>`,
            ])
            .draw("full-reset");
    });
    // return;
    let editButtons = document.querySelectorAll(".edit-beneficiary");
    editButtons.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            const editButton = e.currentTarget;
            const beneficiaryData = JSON.parse(
                $(editButton).attr("data-value")
            );
        });
    });
}

$(document).ready(function () {
    // $("#beneficiary_list_loader").show();
    getBeneficiaryList();
    getPaymentTypes();
    $("#add_beneficiary").on("click", () => {
        addBankBeneficiary($(".current-type").attr("data-value"));
    });

    let beneficiaryType = document.querySelectorAll(".beneficiary-type");
    beneficiaryType.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            const currentType = e.currentTarget;
            $(".beneficiary-type").removeClass("current-type");
            $(currentType).addClass("current-type");
            $("#beneficiary_type_title").text(
                $(currentType).attr("data-title") + " "
            );
            drawBeneficiaryTable();
        });
    });
});
