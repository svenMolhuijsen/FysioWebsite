<?php require_once("content/php-include/header.php"); ?>
    <?php include_once "content/php-include/login-popup.php" ?>
        <div class="container">
            <div class="col-sm-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">lichaamsdelen</h3>
                    </div>
                    <div class="panel-body">
                        <a href="#">Toevoegen</a>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="row-action-primary">
                                <i class="mdi-file-folder"></i>
                            </div>
                            <div class="row-content">
                                <div class="action-secondary"><i class="mdi-material-info"></i></div>
                                <h4 class="list-group-item-heading">Voet</h4>
                                <p class="list-group-item-text">De voet en enkel</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-action-primary">
                                <i class="mdi-file-folder"></i>
                            </div>
                            <div class="row-content">
                                <div class="action-secondary"><i class="mdi-material-info"></i></div>
                                <h4 class="list-group-item-heading">Benen</h4>
                                <p class="list-group-item-text">De benen, knieen enz</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <div class="list-group-item">
                            <div class="row-action-primary">
                                <i class="mdi-file-folder"></i>
                            </div>
                            <div class="row-content">
                                <div class="action-secondary"><i class="mdi-material-info"></i></div>
                                <h4 class="list-group-item-heading">Onderlichaam</h4>
                                <p class="list-group-item-text">Alles tussen de benen en navel</p>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                        <a href="javascript:void(0)" class="btn btn-primary btn-fab btn-raised glyphicon glyphicon-plus"></a>
                    </div>

                </div>

            </div>
            <div class="col-sm-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pagina's</h3>
                    </div>
                    <div class="panel-body">


                        <div class="row user-row">
                            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                                <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50" alt="User Pic">
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                                <strong>gekneuste ballen</strong>
                                <br>
                                <span class="text-muted">zeurende pijn in de ballen</span>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".dropdown1">
                                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                            </div>
                            <hr>
                        </div>
                        <div class="row user-infos dropdown1">
                            <hr>
                            <form class="col-xs-12">
                                <div class="form-group">
                                    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Titel" data-hint="Type hier de naam voor de blessure">
                                    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Omschrijving" data-hint="Geef hier een korte omschrijving">
                                </div>
                                <div class="form-group">
                                    <textarea class="full-editor" name="content"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Opslaan</button>
                                <a href="javascript:void(0)" class="btn btn-flat btn-danger">Verwijderen</a>
                            </form>

                        </div>
                        <hr>
                        <div class="row user-row">
                            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                                <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50" alt="User Pic">
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                                <strong>gekneuste ballen</strong>
                                <br>
                                <span class="text-muted">zeurende pijn in de ballen</span>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".dropdown2">
                                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                            </div>

                        </div>
                        <div class="row user-infos dropdown2">
                            <hr>
                            <form class="col-xs-12">
                                <div class="form-group">
                                    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Titel" data-hint="Type hier de naam voor de blessure">
                                    <input class="form-control floating-label" id="focusedInput" type="text" placeholder="Omschrijving" data-hint="Geef hier een korte omschrijving">
                                </div>
                                <div class="form-group">
                                    <textarea class="full-editor" name="content"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success">Opslaan</button>
                                <a href="javascript:void(0)" class="btn btn-flat btn-danger">Verwijderen</a>
                            </form>

                        </div>
                        <hr>






                    </div>

                </div>
            </div>
        </div>
        <script>
        </script>

        <?php require_once("content/php-include/footer.php"); ?>
