function beneficiary_list() {
    var table = $(".beneficiary_list_display").DataTable();
    var nodes = table.rows().nodes();
    $.ajax({
        tpye: "GET",
        url: "all-beneficiary-list",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            if (response.responseCode == "000") {
                $("#beneficiary_table").show();
                $("#beneficiary_list_loader").hide();
                $("#beneficiary_list_retry_btn").hide();
                $.each(data, function (index) {
                    model_data = data[index];

                    table.row
                        .add([
                            data[index].NICKNAME,
                            data[index].BEN_ACCOUNT,
                            data[index].NICKNAME,
                            data[index].EMAIL,
                            data[index].BANK_NAME,

                            `&emsp;&emsp; <a class='beneficiary_data' data-value='${data[index]}' href='edit-beneficiary?bene_type=${data[index].BENEF_TYPE}&bene_id=${data[index].BENE_ID}'> <span class="fe-edit noti-icon text-primary"></span></a>

                        &emsp;&emsp; <a onclick="doSomething()"  data-value="${data[index].BENE_ID}"><span class="fe-trash noti-icon text-danger delete_beneficiary_data" data-value="${data[index].BENE_ID}"></span></a>`,
                        ])
                        .draw(false);
                });
            } else {
                $("#beneficiary_table").hide();
                $("#beneficiary_list_loader").hide();
                $("#beneficiary_list_retry_btn").show();
            }
        },
    });
}

function beneficiary_details() {
    $.ajax({
        tpye: "GET",
        url: "all-beneficiary-list",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;

            $.each(data, function (index) {
                let bene_id = data[index].BENE_ID;

                console.log(data[index].BENE_ID);
            });
        },
    });
}

function confirm_deletion() {
    var bene_ID = $(".delete_beneficiary_data").attr("data-value");
    alert(bene_ID);
}

function delete_beneficiary() {
    Swal.fire({
        title: "Do you want to Delete Beneficiary?",
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: `Proceed`,
        confirmButtonColor: "#18c40d",
        cancelButtonColor: "#df1919",
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            confirm_deletion();
        } else if (result.isDenied) {
            Swal.fire("Failed to delete beneficiary", "", "info");
        }
    });
}

function doSomething() {
    var bene_ID = $(".delete_beneficiary_data").attr("data-value");
    delete_beneficiary();
}

$(document).ready(function () {
    $("#beneficiary_list_loader").show();
    $("#beneficiary_table").hide();
    setTimeout(function () {
        beneficiary_list();
    }, 2000);

    $("#beneficiary_list_retry_btn").click(function (e) {
        e.preventDefault();
        $("#beneficiary_list_retry_btn").hide();
        $("#beneficiary_list_loader").show();

        setTimeout(function () {
            beneficiary_list();
        }, 2000);
    });

    $(".hell").click(function () {
        alert("hhh");
    });

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
    $("button").click(function () {
        $("a")[0].click();
    });
});
