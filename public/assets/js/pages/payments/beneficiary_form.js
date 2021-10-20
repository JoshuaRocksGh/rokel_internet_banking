function getLocalBanks() {
    return $.ajax({
        type: "GET",
        url: "get-bank-list-api",
        datatype: "application/json",
        success: function (response) {
            let data = response.data;
            console.log(data);
            if (data.length > 1) {
                $.each(data, (i) => {
                    let { bankCode, bankDescription, bankSwiftCode } = data[i];
                    option = `<option value="${bankCode}" data-bank-swift-code="${bankSwiftCode}">${bankDescription}</option>`;
                    $("#select_bank").append(option);
                });
            } else {
                console.log("error occured");
            }
        },
    });
}

async function localBankBeneficiary(beneficiaryData) {
    await getLocalBanks();
    console.log("got here");
    if (beneficiaryData) {
        console.log(beneficiaryData);
        $(`#select_bank option[value=${beneficiaryData.BANK_SWIFT_CODE}]`).prop(
            "selected",
            true
        );
        $("#account_number").val(beneficiaryData.BEN_ACCOUNT);
        $("#account_name").val(beneficiaryData.NICKNAME);
        // prepopulate bene form
    }

    console.log("what to do");
    $("#edit_modal").modal("show");
}

$(document).ready(function () {
    initialModalHtml = $("#edit_modal").html();
    // $("#beneficiary_modal_backup").attr(
    //     "data-beneficiary-modal",
    //     `${initialModalHtml}`
    // );
    let currentFs, nextFs, previousFs;
    $(".next").click(function () {
        if ($(".current-fs").html() === $(".last-fs").html()) {
            Swal.fire();
            return false;
        }
        currentFs = $(".current-fs");
        nextFs = currentFs.next();
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(nextFs)).addClass("active");
        //show the next fieldset
        nextFs.toggle(300, "linear");
        currentFs.toggle(300, "linear");
        currentFs.removeClass("current-fs");
        nextFs.addClass("current-fs");
        $(".action-button-previous").removeAttr("disabled");
        if ($(".current-fs").html() === $(".last-fs").html()) {
            $(".action-button").text("save", true);
        }
    });

    $(".previous").click(function () {
        currentFs = $(".current-fs");
        previousFs = currentFs.prev();
        //Remove class active
        $("#progressbar li")
            .eq($("fieldset").index(currentFs))
            .removeClass("active");
        currentFs.toggle(300, "linear");
        previousFs.toggle(300, "linear");
        currentFs.removeClass("current-fs");
        previousFs.addClass("current-fs");
        $(".action-button").text("next", true);
        if ($(".current-fs").html() === $(".first-fs").html()) {
            $(".action-button-previous").attr("disabled", true);
        }
        //show the previous fieldset
        //hide the current fieldset with style
    });
});

$("#delete_btn").on("click", () => {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#6c757d",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success",
                showConfirmButton: false,
            });
        }
    });
});
