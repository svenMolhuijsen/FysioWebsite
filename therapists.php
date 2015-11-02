<?php require_once("content/php-include/header.php"); ?>

    <div class="container">
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Therapeuten</h3>
                </div>
                <div class="panel-body ">
                    <ul class="list-group  scrollbox" id="contact-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="col-xs-12">
                                    <div class="contact-identifier">
                                        VO
                                    </div>
                                    <span class="open-chat glyphicon glyphicon-chevron-right"></span>
                                    <div class="contact-info">
                                        <span><b>Hassan pesto</b></span>
                                        <br/>
                                        <span>specialismen: benen, enkels</span>
                                        <br>
                                        <span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="" data-original-title="Verwijderen"></span>
                                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="" data-original-title="Bewerken"></span>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        </li>
                        <hr/>
                        <li class="list-group-item">

                            <a href="#">
                                <div class="col-xs-12">
                                    <div class="contact-identifier">
                                        VO
                                    </div>
                                    <span class="open-chat glyphicon glyphicon-chevron-right"></span>
                                    <div class="contact-info">
                                        <span><b>Hassan pesto</b></span>
                                        <br/>
                                        <span>specialismen: benen, enkels</span>
                                        <br>
                                        <span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="" data-original-title="Verwijderen"></span>
                                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="" data-original-title="Bewerken"></span>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        </li>
                        <hr>
                    </ul>
                    <div class="addbutton">
                        <a class="btn btn-primary btn-fab btn-raised" data-toggle="tooltip" title="Categorie toevoegen">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </div>


                </div>
            </div>

        </div>
        <div class="col-sm-7">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Bart Kessels</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                            <button data-original-title="reset wachtwoord" data-toggle="tooltip" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-asterisk"></i><i class="glyphicon glyphicon-asterisk"></i><i class="glyphicon glyphicon-asterisk"></i></button>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <form>
                                <table class="table table-therapist-information">
                                    <tbody>
                                        <tr>
                                            <td>Vooraam:</td>
                                            <td>
                                                <span>Bart</span>

                                                <input type="text" name="achternaam" value="" class="form-control" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Achternaam:</td>
                                            <td>
                                                <span>Kessels</span>

                                                <input type="text" name="achternaam" value="" class="form-control" required>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Specialismen:</td>
                                            <td>
                                                <span>knie, enkel</span>
                                                <input type="text" name="specialismen" value="" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Datum in dienst</td>
                                            <td>
                                                <span>1997-04-01</span>
                                                <input type="date" name="datum in dienst" value="" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Geboortedatum</td>
                                            <td><span>1997-04-01</span>
                                                <input type="date" name="geboortedatum" value="" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <tr>
                                                <td>Geslacht</td>
                                                <td><span>Man</span>
                                                    <select class="form-control" value="" id="select">
                                                        <option>Vrouw</option>
                                                        <option>Man</option>
                                                        <option>anders...</option>
                                                    </select>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><span>Bart@fysiofitcare.nl</span>
                                                    <input type="mail" name="email" value="" class="form-control" required>
                                                </td>
                                            </tr>
                                            <td>Telefoon</td>
                                            <td>
                                                <span>+31 6-341-94-230</span>
                                                <input type="text" name="telefoon" value="" class="form-control" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" data-original-title="Sla wijzigingen op" data-toggle="tooltip" class="editTherapistBtn btn btn-sm btn-success"><i class="glyphicon glyphicon-floppy-disk"></i></button>
                                <button data-original-title="Stop met wijzigen" data-toggle="tooltip" class="toggleForm editTherapistBtn btn btn-sm btn-primary"><i class="glyphicon glyphicon-triangle-left"></i></button>
                                <a data-original-title="Zet op non-actief" data-toggle="tooltip" type="button" class="editTherapistBtn btn btn-sm btn-warning"><i class="glyphicon glyphicon-lock"></i></a>
                                <a data-original-title="Verwijder gebruiker" data-toggle="tooltip" type="button" class="editTherapistBtn btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Wijzig gegevens" data-toggle="tooltip" type="button" class=" toggleForm btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i></a>

                </div>

            </div>
        </div>

    </div>
    <script>
    </script>

    <?php require_once("content/php-include/footer.php"); ?>
