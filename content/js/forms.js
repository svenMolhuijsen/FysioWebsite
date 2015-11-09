    $(document).ready(function () {
        // SWITCH OM TE BEPALEN WELK FORMULIER ER WORD VERSTUURD
        $("form").submit(function () {
            switch (this.id) {
            case "login-form":
                //INLOGGEN
                var txt_login_username = $('#txt_login_username').val();
                var pswd_txt_login_password = $('#pswd_txt_login_password').val();
                $.post(s_CoreAdress + "?action=login", {
                        mail: txt_login_username,
                        password: pswd_txt_login_password
                    })
                    .done(function (data) {
                        data = $.parseJSON(data);
                        if (data["login"] == "true") {
                            msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                        } else {
                            msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Er ging iets mis bij inloggen");
                        }
                    })
                    .fail(function () {
                        msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Er zijn problemen met de connectie");
                    });
                return false;
                break;
            case "lost-form":
                //WACHTWOORD VERGETEN
                var txt_lost_email = $('#txt_lost_email').val();
                $.post(s_CoreAdress + "?action=forgotPassword", {
                        mail: txt_lost_email
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
    });
