function beneficiary_list() {
    $.ajax({
        tpye: "GET",
        url: "all-beneficiary-list",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            if (response.responseCode == "000") {
                $("#beneficiary_list_loader").hide();
                $("#beneficiary_list_retry_btn").hide();
                let table = $(".beneficiary_list_display").DataTable({
                    destroy: true,
                });
                $.each(data, function (index) {
                    beneData = JSON.stringify(data[index]);
                    table.row
                        .add([
                            data[index].NICKNAME,
                            data[index].BEN_ACCOUNT,
                            data[index].NICKNAME,
                            data[index].EMAIL,
                            data[index].BANK_NAME,

                            // `&emsp;&emsp; <a class='beneficiary_data' data-value='${beneData}' href='edit-beneficiary?bene_type=${data[index].BENEF_TYPE}&bene_id=${data[index].BENE_ID}'> <span class="fe-edit noti-icon text-primary"></span></a>`,
                            `<a class='edit-beneficiary' style="display:flex; place-content:center;" href="#" data-value='${beneData}'> <span class="fe-edit noti-icon text-info"></span></a>`,

                            // &emsp;&emsp; <a onclick="doSomething()"  data-value="${data[index].BENE_ID}"><span class="fe-trash noti-icon text-danger delete_beneficiary_data" data-value="${data[index].BENE_ID}"></span></a>`,
                        ])
                        .draw(false);
                });
                let payments = document.querySelectorAll(".edit-beneficiary");
                payments.forEach((item, i) => {
                    item.addEventListener("click", (e) => {
                        editButton = e.currentTarget;
                        $("#edit_modal").modal("show");
                    });
                });
            } else {
                $("#beneficiary_table").hide();
                $("#beneficiary_list_loader").hide();
                $("#beneficiary_list_retry_btn").show();
            }
        },
    });
}

// function beneficiary_details() {
//     $.ajax({
//         tpye: "GET",
//         url: "all-beneficiary-list",
//         datatype: "application/json",
//         success: function (response) {
//             let data = response.data;

//             $.each(data, function (index) {
//                 let bene_id = data[index].BENE_ID;

//                 console.log(data[index].BENE_ID);
//             });
//         },
//     });
// }

$(document).ready(function () {
    $("#beneficiary_list_loader").show();
    beneficiary_list();

    $("#delete_beneficiary_data").click(function (e) {
        e.preventDefault();
        var bene_id = $(".delete_beneficiary_data").attr("data-value");
        console.log(bene_id);
        return false;
        $.ajax({
            type: "delete",
            url: "delete-beneficiary",
            datatype: "application/json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (resposne) {
                console.log(resposne);
            },
        });

        var bene_id = $(".delete_beneficiary_data").list().attr("data-value");
        console.log(bene_id);
        return false;
    });
    // $("button").click(function () {
    //     $("a")[0].click();
    // });
});
