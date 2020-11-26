function checkPasswordMatch() {
    var password = $("#Password").val();
    var confirmPassword = $("#RPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#Password, #RPassword").keyup(checkPasswordMatch);
});