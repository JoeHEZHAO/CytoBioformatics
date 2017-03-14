function storeUserData() {
    var userdata = {
        gender : $("#ud_gender").val(),
        organization : $("#ud_organization").val(),
        phone : $("#ud_phone").val(),
        address1 : $("#ud_address1").val(),
        address2 : $("#ud_address2").val(),
        city : $("#ud_city").val(),
        region : $("#ud_region").val(),
        country : $("#ud_country").val(),
        postalCode : $("#ud_postalCode").val()
    };
    return userdata;
}

function resetUserData(newUserData) {
    $("#ud_gender").val(newUserData.gender);
    $("#ud_organization").val(newUserData.organization);
    $("#ud_phone").val(newUserData.phone);
    $("#ud_address1").val(newUserData.address1);
    $("#ud_address2").val(newUserData.address2);
    $("#ud_city").val(newUserData.city);
    $("#ud_region").val(newUserData.region);
    $("#ud_country").val(newUserData.country);
    $("#ud_postalCode").val(newUserData.postalCode);
}

var old_userdata;
$('.user_profile_edit').on('click', function(event) {
    event.preventDefault();
    $(this).addClass("deactivated");
    $(this).parent().siblings().removeClass("deactivated");
    $(".userdata_input").prop("disabled", false);
    old_userdata = storeUserData();
});

$('.edit_cancel').on('click', function(event) {
    event.preventDefault();
    $(this).addClass("deactivated");
    $(".edit_submit").addClass("deactivated");
    $(".user_profile_edit").removeClass("deactivated");
    $(".userdata_input").prop("disabled", true);
    resetUserData(old_userdata);
});

$('#edit_profile').submit(function() {
    $("#error_label").css("display", "none");
    $(".userdata_input").prop("disabled", false);

    var email = $("#ud_email").val();
    var gender = $("#ud_gender").val();
    var organization = $("#ud_organization").val();
    var phone = $("#ud_phone").val();
    var address1 = $("#ud_address1").val();
    var address2 = $("#ud_address2").val();
    var city = $("#ud_city").val();
    var region = $("#ud_region").val();
    var country = $("#ud_country").val();
    var postalCode = $("#ud_postalCode").val();
    
    // submit form data
    $.ajax({
        method: "POST",
        url: $('#edit_profile').attr('action') + '/Register/modify_userdata',
        data: { email: email, gender: gender, organization: organization, phone: phone, address1 : address1, address2: address2, city: city, region: region, country: country, postalCode: postalCode },
        success: function (response) {
//            console.log(response);
            if (response == 'success') {
                $(".edit_cancel").addClass("deactivated");
                $(".edit_submit").addClass("deactivated");
                $(".user_profile_edit").removeClass("deactivated");
                $(".userdata_input").prop("disabled", true);
                $("#error_label").text("Profile updated!");
                $("#error_label").css("color", "#282a37");
                $("#error_label").css("display", "block");
                $("#error_label").fadeOut(2000);
            } else if (response == 'failed_to_update') {
                $("#error_label").text("Error updating database. Please contact us.");
                $("#error_label").css("display", "block");
            } else {
                $("#error_label").text("An unknown error occurred. Please contact us.");
                $("#error_label").css("display", "block");
            }
        },
        error: function(xhr, textStatus, errorThrown){
            alert('Request failed.\n\n' + errorThrown);
        }
    })
    return false; // keep page from refreshing
});