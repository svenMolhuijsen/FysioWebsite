//INLOGGEN
$.post("api/api.php?action=login", {
        mail: txt_login_username,
        password: pswd_txt_login_password
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


$.post("api/api.php?action=forgotPassword", {
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

$.post("api/api.php?action=listtherapists", {
        mail: login_username,
        password: pswd_txt_login_password
    })
    .done(function (data) {

            .fail(function () {
                alert("er ging iets niet goed..." + data);
            });
