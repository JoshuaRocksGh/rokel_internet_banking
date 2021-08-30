// {{--  function get_lovs() {

//     $(".accounts_display_area").hide()
//     $(".accounts_error_area").hide()
//     $(".accounts_loading_area").show()

//     $.ajax({
//         "type": "GET",
//         "url": "get-accounts-api",
//         datatype: "application/json",

//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function(response) {
//             console.log(response);
//             if (response.responseCode == '000') {

//                 let data = response.data.;

//                 let custerlist =

//                 $.each(data, function(index) {
//                     $('.casa_list_display').append(`<tr>
//                         <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].accountNumber}') }}"> <b class="text-primary">${data[index].accountNumber} </b> </a></td>
//                         <td> <b> ${data[index].accountDesc} </b>  </td>
//                         <td> <b> ${data[index].accountType}  </b>  </td>
//                         <td> <b> ${data[index].currency}  </b>  </td>
//                         <td> <b> ${data[index].availableBalance}   </b> </b></td>
//                         <td> <b> ${data[index].ledgerBalance}   </b>  </td>
//                         <td>  <b> 0.00  </b> </td>
//                     </tr>`)

//                 })

//                 $(".accounts_error_area").hide()
//                 $(".accounts_loading_area").hide()
//                 $(".accounts_display_area").show()

//             } else {

//                 $(".accounts_error_area").hide()
//                 $(".accounts_loading_area").hide()
//                 $(".accounts_display_area").show()

//             }

//         },
//         error: function(xhr, status, error) {

//             $(".accounts_loading_area").hide()
//             $(".accounts_display_area").hide()
//             $(".accounts_error_area").show()

//         }
//     })
// }  --}}

function lovs_list() {
    $.ajax({
        type: "GET",
        url: "../get-lovs-list-api",
        datatype: "application/json",
        success: function (response) {
            console.log(response);
            let title_list = response.data.titleList;
            let country_list = response.data.nationalityList;
            let id_list = response.data.documentTypeList;

            console.log(id_list);

            $.each(title_list, function (index) {
                $("#title").append(
                    $("<option>", {
                        value: title_list[index].description,
                    }).text(title_list[index].description)
                );
            });
            $.each(country_list, function (index) {
                $("#country").append(
                    $("<option>", {
                        value: country_list[index].description,
                    }).text(country_list[index].description)
                );
            });

            $.each(id_list, function (index) {
                $("#id_type").append(
                    $("<option>", {
                        value: id_list[index].description,
                    }).text(id_list[index].description)
                );
            });
        },
    });
}

$(() => {
    console.log("here");
    $("#spinner").hide(), $("#spinner-text").hide(), $("#print_receipt").hide();

    setTimeout(function () {
        lovs_list();
        $(".mod-open").trigger("click");
    }, 1000);

    //    $('#previewImg').hide();
    $(".display_selected_id_image").hide();
    $(".display_passport_picture").hide();
    $(".display_selfie").hide();

    $("#v-pills-tab").click(function (e) {
        return false;
    });

    $("#personal_details").submit(function (e) {
        e.preventDefault();

        var title = $("#title").val();
        var surname = $("#surname").val();
        var firstname = $("#firstname").val();
        var gender = $("#select_gender input[type='radio']:checked").val();
        var birthday = $("#DOB").datepicker().val();
        var birth_place = $("#birth_place").val();
        var country = $("#country").val();

        $("#custom-v-pills-personal-details-tab").removeClass("active show");
        $("#custom-v-pills-contact-and-id-details-tab").addClass("active show");
        $("#custom-v-pills-personal-details").removeClass("active show");
        $("#custom-v-pills-contact-and-id-details").addClass("active show");
        return false;
        //            alert(title + ' ' + surname + ' ' + firstname + ' ' + gender + ' ' + birthday + ' ' + birth_place + ' ' + country);
    });

    // Personal Details form
    $("#next1").click(function (e) {
        e.preventDefault();

        var title = $("#title").val();
        var surname = $("#surname").val();
        var firstname = $("#firstname").val();
        var gender = $("#select_gender input[type='radio']:checked").val();
        var birthday = $("#DOB").datepicker().val();
        var birth_place = $("#birth_place").val();
        var country = $("#country").val();

        //            alert(title + '' + surname + '' + firstname + '' + gender + '' + birthday + '' + birth_place + '' + country);
    });

    $("#image_upload").change(function () {
        var file = $("#image_upload[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $(".display_selected_id_image").attr("src", reader.result);
            };

            reader.readAsDataURL(file);

            reader.onload = function () {
                // {{--  alert(reader.result)  --}}
                $(".display_selected_id_image").attr("src", reader.result);
                $("#image_upload_").val(reader.result);
            };
        }

        $(".display_selected_id_image").show();
    });

    $("#previewImg").change(function () {
        var file = $("#previewImg[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $(".previewImg").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }
    });

    // C0ntact Details Values
    $("#contact_id_details").submit(function (e) {
        //            $('#next2').submit(function(e){
        e.preventDefault();

        var mobile_number = $("#mobile_number").val();
        var email = $("#email").val();
        var city = $("#city").val();
        var town = $("#town").val();
        var residential_address = $("#residential_address").val();
        var id_type = $("#id_type").val();
        var id_number = $("#id_number").val();
        var issue_date = $("#issue_date").datepicker().val();
        var expiry_date = $("#expiry_date").datepicker().val();
        //                var image_upload = $('#image_upload').val(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');
        //                console.log(image_upload);

        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $("#previewImg").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }

        //                alert(mobile_number + ' ' + email + ' ' + city + ' ' + town + ' ' + id_number + ' ' + residential_address + ' ' + issue_date + ' ' + expiry_date + ' ');

        $("#custom-v-pills-contact-and-id-details-tab").removeClass(
            "active show"
        );
        $("#custom-v-pills-bio-details-tab").addClass("active show");
        $("#custom-v-pills-contact-and-id-details").removeClass("active show");
        $("#custom-v-pills-bio-details").addClass("active show");
    });

    $("#bio-previous-btn").click(function () {});

    $("#bio_details").submit(function (e) {
        e.preventDefault();

        $("#custom-v-pills-bio-details-tab").removeClass("active show");
        $("#summary-tab").addClass("active show");
        $("#custom-v-pills-bio-details").removeClass("active show");
        $("#summary-v-pills-payment").addClass("active show");

        // Personal Details
        var title = $("#title").val();
        $("#display_title").text(title);

        var surname = $("#surname").val();
        $("#display_surname").text(surname);

        var firstname = $("#firstname").val();
        $("#display_firstname").text(firstname);

        var gender = $("#select_gender input[type='radio']:checked").val();
        $("#display_select_gender").text(gender);

        var birthday = $("#DOB").datepicker().val();
        $("#display_DOB").text(birthday);

        var birth_place = $("#birth_place").val();
        $("#display_birth_place").text(birth_place);

        var country = $("#country").val();
        var country_info = country.split("~");
        $("#display_country").text(country_info[1]);

        // Contact & ID Details
        var mobile_number = $("#mobile_number").val();
        $("#display_mobile_number").text(mobile_number);

        var email = $("#email").val();
        $("#display_email").text(email);

        var city = $("#city").val();
        $("#display_city").text(city);

        var town = $("#town").val();
        $("#display_town").text(town);

        var residential_address = $("#residential_address").val();
        $("#display_residential_address").text(residential_address);

        var id_type = $("#id_type").val();
        $("#display_id_type").text(id_type);

        var id_number = $("#id_number").val();
        $("#display_id_number").text(id_number);

        var issue_date = $("#issue_date").datepicker().val();
        $("#display_issue_date").text(issue_date);

        var expiry_date = $("#expiry_date").datepicker().val();
        $("#display_expiry_date").text(expiry_date);

        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $("#previewImg").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }
    });

    // Bio Details

    $("#passport_picture").change(function () {
        var file = $("#passport_picture[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $(".display_passport_picture").attr("src", reader.result);
            };

            reader.readAsDataURL(file);

            reader.onload = function () {
                // {{--  alert(reader.result)  --}}

                $(".display_passport_picture").attr("src", reader.result);
                $("#passport_picture_").val(reader.result);
            };
        }
        $(".display_passport_picture").show();
    });

    $("#selfie_upload").change(function () {
        var file = $("#selfie_upload[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $(".display_selfie").attr("src", reader.result);
            };

            reader.readAsDataURL(file);

            reader.onload = function () {
                // {{--  alert(reader.result)  --}}
                $(".display_selfie").attr("src", reader.result);
                $("#selfie_upload_").val(reader.result);
            };
        }

        $(".display_selfie").show();
    });

    $("#confirm_submit").click(function (e) {
        e.preventDefault();

        // Personal Details
        var title = $("#title").val();
        $("#display_title").text(title);

        var surname = $("#surname").val();
        $("#display_surname").text(surname);

        var firstname = $("#firstname").val();
        $("#display_firstname").text(firstname);

        var gender = $("#select_gender input[type='radio']:checked").val();
        $("#display_select_gender").text(gender);

        var birthday = $("#DOB").datepicker().val();
        $("#display_DOB").text(birthday);

        var birth_place = $("#birth_place").val();
        $("#display_birth_place").text(birth_place);

        var country = $("#country").val();
        var country_info = country.split("~");
        $("#display_country").text(country_info[1]);
        var country_ = country[1];

        // Contact & ID Details
        var mobile_number = $("#mobile_number").val();
        $("#display_mobile_number").text(mobile_number);

        var email = $("#email").val();
        $("#display_email").text(email);

        var city = $("#city").val();
        $("#display_city").text(city);

        var town = $("#town").val();
        $("#display_town").text(town);

        var residential_address = $("#residential_address").val();
        $("#display_residential_address").text(residential_address);

        var id_type = $("#id_type").val();
        $("#display_id_type").text(id_type);

        var id_number = $("#id_number").val();
        $("#display_id_number").text(id_number);

        var issue_date = $("#issue_date").datepicker().val();
        $("#display_issue_date").text(issue_date);

        var expiry_date = $("#expiry_date").datepicker().val();
        $("#display_expiry_date").text(expiry_date);

        var id_image = $("#image_upload_").val();

        var passport_picture = $("#passport_picture_").val();

        var signed_selfie_paper = $("#selfie_upload_").val();

        $("#spinner").show();
        $("#spinner-text").show();

        $("#confirm_submit_text").hide(),
            $("#confirm_submit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: "../savings-account-creation-api",
            datatype: "application/json",
            data: {
                title: title,
                surname: surname,
                firstname: firstname,
                gender: gender,
                birthday: birthday,
                birth_place: birth_place,
                country: country,
                mobile_number: mobile_number,
                email: email,
                city: city,
                town: town,
                residential_address: residential_address,
                id_type: id_type,
                id_number: id_number,
                issue_date: issue_date,
                expiry_date: expiry_date,
                id_image: id_image,
                passport_picture: passport_picture,
                signed_selfie_paper: signed_selfie_paper,
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                console.log(response);
                if (response.responseCode == "000") {
                    toaster(response.message, "success", 3000);
                } else {
                    toaster(response.message, "error", 3000);

                    $("#spinner").hide();
                    $("#spinner-text").hide();
                    $("#confirm_submit_text").show(),
                        // {{--  $('#print_receipt').hide();  --}}
                        // {{--  $('#confirm_transfer').show();  --}}
                        $("#confirm_submit").attr("disabled", false);
                }
            },
        });
    });
});
