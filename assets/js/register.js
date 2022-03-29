$(document).ready(function() {
    $("#hideLogin").click(function() {
        console.log("login is pressed");
        $("#loginForm").hide();
        $("#registerForm").show();
    });

    $("#hideRegister").click(function() {
        console.log("sign up pressed");
        $("#loginForm").show();
        $("#registerForm").hide();
    });
});