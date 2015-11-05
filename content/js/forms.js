// SWITCH OM TE BEPALEN WELK FORMULIER ER WORD VERSTUURD
$("form").submit(function () {
    switch (this.id) {
    case "login-form":
        var txt_login_username = $('#txt_login_username').val();
        var pswd_txt_login_password = $('#pswd_txt_login_password').val();
        //TODO: XMRCP VOOR INLOGGEN

        return false;
        break;
    case "lost-form":
        var txt_lost_email = $('#txt_lost_email').val();
        //TODO: XMRCP VOOR HERSTEL WACHTWOORD

        return false;
        break;
    default:
        return false;
        break;
    }
    return false;
});
