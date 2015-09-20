<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img" id="img_logo" src="http://www.fysiofitcare.nl/wp-content/themes/creativehumans/images/logo-fysiofitcare.png">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
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

                        <input id="login_username" class="form-control" type="text" placeholder="Gebruikersnaam" required>
                        <input id="login_password" class="form-control" type="password" placeholder="Wachtwoord" required>
                        <br>
                        <div class="togglebutton">
                            <label>
                                <input type="checkbox" checked=""><span class="toggle"></span>Ingelogd blijven
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Log in</button>
                        <button id="login_lost_btn" type="button" class="btn btn-default">Wachtwoord vergeten?</button>
                        <button id="login_register_btn" type="button" class="btn btn-default">Registreren</button>
                    </div>




                </form>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">vul je email in</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                        <br>
                        <button type="submit" class="btn btn-primary ">Verstuur</button>
                        <button id="lost_login_btn" type="button" class="btn btn-default">Inloggen</button>
                        <button id="lost_register_btn" type="button" class="btn btn-default">Registreren</button>
                    </div>



                </form>
                <!-- End | Lost Password Form -->

                <!-- Begin | Register Form -->
                <form id="register-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-register-msg">
                            <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-register-msg">Registreer een gebruiker</span>
                        </div>
                        <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                        <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                        <input id="register_password" class="form-control" type="password" placeholder="Wachtwoord" required>
                        <button type="submit" class="btn btn-primary">Registreer</button>
                        <button id="register_login_btn" type="button" class="btn btn-default">Inloggen</button>
                        <button id="register_lost_btn" type="button" class="btn btn-default">Wachtwoord vergeten?</button>
                    </div>



            </div>
            </form>
            <!-- End | Register Form -->

        </div>
        <!-- End # DIV Form -->

    </div>
</div>
</div>
<!-- END # MODAL LOGIN -->
