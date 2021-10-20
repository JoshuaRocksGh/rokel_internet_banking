function beneficiary_list() {
    $.ajax({
        tpye: "GET",
        url: "all-beneficiary-list",
        datatype: "application/json",
        success: function (response) {
            if (response.responseCode == "000") {
                const data = response.data;
                console.log(data);
                // $("#beneficiary_list_loader").hide();
                // $("#beneficiary_list_retry_btn").hide();
                sameBankBeneficiaries = [];
                otherBankBeneficiaries = [];
                internationalBeneficiaries = [];
                $.each(data, function (i) {
                    if (data[i].BENEF_TYPE === "SAB") {
                        sameBankBeneficiaries.push(data[i]);
                    } else if (data[i].BENEF_TYPE === "OTB") {
                        otherBankBeneficiaries.push(data[i]);
                    } else if (data[i].BENEF_TYPE === "ITB") {
                        internationalBeneficiaries.push(data[i]);
                    }
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
function drawBeneficiaryTable() {
    let table = $("#beneficiary_list").DataTable({
        destroy: true,
    });
    table.clear();
    const currentType = $(".current-type").attr("data-value");
    let data = [];
    if (currentType === "SAB") {
        data = sameBankBeneficiaries;
    } else if (currentType === "OTB") {
        data = otherBankBeneficiaries;
    } else if (currentType === "INT") {
        data = internationalBeneficiaries;
    }
    console.log(data);
    $.each(data, (index) => {
        console.log(data[index]);
        beneData = JSON.stringify(data[index]);
        table.row
            .add([
                data[index].NICKNAME,
                data[index].BEN_ACCOUNT,
                data[index].NICKNAME,
                data[index].BANK_NAME,

                `<a class='edit-beneficiary' style="display:flex; place-content:center;" href="#" data-value='${beneData}'> <span class="fe-edit noti-icon text-info"></span></a>`,
            ])
            .draw("full-reset");
    });
    let editButtons = document.querySelectorAll(".edit-beneficiary");
    editButtons.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            editButton = e.currentTarget;
            let beneficiaryData = JSON.parse($(editButton).attr("data-value"));
            if (beneficiaryData.BENEF_TYPE === "OTB") {
                localBankBeneficiary(beneficiaryData);
            }
        });
    });
}
$(document).ready(function () {
    $("#beneficiary_list_loader").show();
    beneficiary_list();
    let beneficiaryType = document.querySelectorAll(".beneficiary-type");
    beneficiaryType.forEach((item, i) => {
        item.addEventListener("click", (e) => {
            const currentType = e.currentTarget;
            $(".beneficiary-type").removeClass("current-type");
            $(currentType).addClass("current-type");
            drawBeneficiaryTable();
        });
    });
});
