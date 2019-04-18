
$(document).ready(function () {
    "use strict";
    $("#submit").click(function () {

    
        var email = $("#myemail").val(), password = $("#mypassword").val();
        if ((email === "") || (password === "")) {
            $("#message").html("<div>Please enter a username and a password</div><br>");
        } else {
            $.ajax({
                type: "POST",
                url: "php/checklogin.php",
                data: "myemail=" + email + "&mypassword=" + password,
                dataType: 'JSON',
                success: function (response) {
                    if (response === 'accept') {
                        location.assign("index.php");
                    } else {
                        $("#message").html("<p>" + response + "<p>");
                    }
                },
                beforeSend: function () {
                    $("#message").html("<p><img src='images/ajax-loader.gif'></p>");
                }
            });
        }
        return false;
    });
});