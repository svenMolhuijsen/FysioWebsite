var $formLogin = $('#login-form');
var $formLost = $('#lost-form');
var $formRegister = $('#register-form');
var $divForms = $('#div-forms');
var $modalAnimateTime = 300;
var $msgAnimateTime = 150;
var $msgShowTime = 2000;

// SWITCH OM TE BEPALEN WELK FORMULIER ER WORD VERSTUURD
$("form").submit(function () {
    switch (this.id) {
    case "login-form":
        var login_username = $('#login_username').val();
        var login_password = $('#login_password').val();
        $.post("api/api.php?action=login", {
                mail: login_username,
                password: login_password
            })
            .done(function (data) {
                data = $.parseJSON(data);
                if (data["status"] == "success") {
                    console.log(data);
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                    document.cookie = "uuid=" + data["uuid"] + ";practice_uuid=" + data["practice_uuid"];
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Er ging iets mis bij inloggen");
                }
            })
            .fail(function () {
                alert("er ging iets niet goed..." + data);
            });

        return false;
        break;
    case "lost-form":
        //TODO: AJAX VOOR HERSTEL WACHTWOORD
        var lost_email = $('#lost_email').val();
        $.post("api/api.php?action=forgotPassword", {
                mail: lost_email
            })
            .done(function (data) {
                console.log(data);
                data = $.parseJSON(data);

                if (data["status"] == "sent") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Er is een mail verzonden naar het opgegeven e-mailadres met instructies");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Dit e-mail adres is niet gevonden in de database");
                }
            })
            .fail(function () {
                msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Er zijn problemen met de verbinding");
            });
        return false;
        break;
    default:
        return false;
        break;
    }
    return false;
});
