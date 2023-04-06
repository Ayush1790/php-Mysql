$(document).ready(function () {
    //code for sign in
    $("#submit").click(function () {
        let name = $("#name").val();
        let email = $("#email").val();
        let pswd = $("#pswd").val();
        let cpswd = $("#cpswd").val();
        //checking empty fields
        if (checkEmpty(name, "Name", "#name_msg")) { return; }
        if (checkEmpty(email, "Email", "#email_msg")) { return; }
        if (checkEmpty(pswd, "Password", "#pswd_msg")) { return; }
        if (checkEmpty(cpswd, "Confirm Password", "#cpswd_msg")) { return; }
        if (pswd != cpswd) {
            $("#msg").text("Password not matched").css("color", "red");
            return;
        } else {
            $("#msg").text("");
            $.ajax({
                url: 'registration.php',
                method: 'POST',
                data: { 'name': name, 'email': email, 'pswd': pswd, 'cpswd': cpswd },
                datatype: 'json'
            }).done(function (value) {
                if (value) {
                    window.location = "login.php";
                } else {
                    alert("Something went wrong , Please Try Again");
                }
            })
        }
    })
    // code for login
    $("#login").click(function () {
        let email = $("#login_email").val();
        let pswd = $("#login_pswd").val();
        if (checkEmpty(email, "Email", "#login_email_msg")) { return; }
        if (checkEmpty(pswd, "Password", "#login_pswd_msg")) { return; }
        $.ajax({
            url: 'loginValidator.php',
            type: 'POST',
            data: { 'login_email': email, 'login_pswd': pswd },
            datatype: 'json'
        }).done(function (value) {
            if (value) {
                $("#content").html(value);
            } else {
                alert("Fail!,Please enter correct email and password");
            }
        })
    })
    // code for password matcher
    $("#cpswd").keyup(function () {
        let pswd = $("#pswd").val();
        let cpswd = $("#cpswd").val();
        if (pswd == cpswd) {
            $("#cpswd_msg").text("Matched").css("color", "green");
        } else {
            $("#cpswd_msg").text("Not Matched").css("color", "red");
        }
    })
})
// function to check empty fields
function checkEmpty(id, msg, msg_id) {
    if (id == "") {
        $(msg_id).text(msg + " can not be empty").css("color", "red");
        return 1;
    } else {
        $(msg_id).text("");
    }
}
