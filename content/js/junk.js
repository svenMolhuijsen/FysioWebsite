

$.post("api/api.php?action=listtherapists", {
        mail: login_username,
        password: pswd_txt_login_password
    })
    .done(function (data) {

            .fail(function () {
                alert("er ging iets niet goed..." + data);
            });
