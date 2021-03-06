<?php require_once("content/php-include/header.php"); ?>
    <div class="navbar-wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <img class="img" id="img_logo" src="http://www.fysiofitcare.nl/wp-content/themes/creativehumans/images/logo-fysiofitcare.png">
                    </div>
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <!-- Begin # Login Form -->
                        <form id="login-form">
                            <div class="modal-body">
                                <div id="div-login-msg">
                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-login-msg">Voer uw gebruikersnaam en wachtwoord in.</span>
                                </div>
                                <br>
                                <input id="txt_login_username" class="form-control" type="text" placeholder="Gebruikersnaam">
                                <input id="pswd_txt_login_password" class="form-control" type="password" placeholder="Wachtwoord">
                                <br>
                                <button type="submit " class="btn btn-primary ">Log in</button>
                                <button id="login_lost_btn" type="button " class="btn btn-default ">Wachtwoord vergeten?</button>
                            </div>
                        </form>
                        <!-- End # Login Form -->

                        <!-- Begin | Lost Password Form -->
                        <form id="lost-form" style="display: none;">
                            <div class="modal-body">
                                <div id="div-lost-msg">
                                    <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right "></div>
                                    <span id="text-lost-msg">vul je email in</span>
                                </div>
                                <input id="txt_lost_email" class="form-control " type="text " placeholder="E-Mail">
                                <br>
                                <button type="submit" class="btn btn-primary ">Verstuur</button>
                                <button id="lost_login_btn" type="button" class="btn btn-default">Inloggen</button>
                            </div>
                        </form>
                        <!-- End | Lost Password Form -->
                    </div>
                    <!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

    </div>
    <script>
        $(document).ready(function () {
            //bevat functies en variabelen voor includes
            var $formLogin = $('#login-form');
            var $formLost = $('#lost-form');
            var $formRegister = $('#register-form');
            var $divForms = $('#div-forms');
            var $modalAnimateTime = 300;
            var $msgAnimateTime = 150;
            var $msgShowTime = 2000;

            //ANIMATIES LOGINFORM
            // SWITCHT TUSSEN FORMULIEREN
            $('#login_register_btn').click(function () {
                modalAnimate($formLogin, $formRegister)
            });
            $('#register_login_btn').click(function () {
                modalAnimate($formRegister, $formLogin);
            });
            $('#login_lost_btn').click(function () {
                modalAnimate($formLogin, $formLost);
            });
            $('#lost_login_btn').click(function () {
                modalAnimate($formLost, $formLogin);
            });

            function modalAnimate($oldForm, $newForm) {
                var $oldH = $oldForm.height();
                var $newH = $newForm.height();
                $divForms.css("height", $oldH);
                $oldForm.fadeToggle($modalAnimateTime, function () {
                    $divForms.animate({
                        height: $newH
                    }, $modalAnimateTime, function () {
                        $newForm.fadeToggle($modalAnimateTime);
                    });
                });
            }

            function msgFade($msgId, $msgText) {
                $msgId.fadeOut($msgAnimateTime, function () {
                    $(this).text($msgText).fadeIn($msgAnimateTime);
                });
            }

            function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
                var $msgOld = $divTag.text();
                msgFade($textTag, $msgText);
                $divTag.addClass($divClass);
                $iconTag.removeClass("glyphicon-chevron-right");
                $iconTag.addClass($iconClass + " " + $divClass);
                setTimeout(function () {
                    msgFade($textTag, $msgOld);
                    $divTag.removeClass($divClass);
                    $iconTag.addClass("glyphicon-chevron-right");
                    $iconTag.removeClass($iconClass + " " + $divClass);
                }, $msgShowTime);
            }

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
                                checklogin(data);
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
                            console.log(data["status"]);
                            if (data["status"] == "true") {
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
    </script>
    <?php require_once("content/php-include/footer.php "); ?>
