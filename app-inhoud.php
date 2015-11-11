<?php require_once("content/php-include/header.php"); ?>

    <div class="container">
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">lichaamsdelen</h3>
                </div>
                <div class="panel-body ">

                    <ul class="list-group  scrollbox" id="category-list">

                        <li data-cat-id="1" data-cat-uuid="1" class="list-group-item">
                            <a href="#">
                                <div class="col-xs-12">
                                    <div class="contact-identifier">
                                        VO
                                    </div>
                                    <span class="open-chat glyphicon glyphicon-chevron-right"></span>
                                    <div class="contact-info">
                                        <span class="categoryTitle"><b>Voeten</b></span>
                                        <br/>
                                        <span class="categoryDescription">De voeten en enkels.</span>
                                        <br>
                                        <span id="deleteCategory" class="glyphicon glyphicon-trash" data-toggle="tooltip" title="" data-original-title="Verwijderen"></span>
                                        <span id="editCategory" class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="" data-original-title="Bewerken"></span>
                                    </div>
                                </div>
                            </a>

                        </li>

                    </ul>
                    <div class="addbutton">
                        <a id="btn_add_category" data-target="#add_category_modal" data-toggle="modal" class="btn btn-primary btn-fab btn-raised" title="Categorie toevoegen">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </div>
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
                        <div class="col-xs-10">
                            <strong>gescheurde enkelbanden</strong>
                            <br>
                            <span class="text-muted">stekende pijn in de enkels</span>
                        </div>
                        <div class="col-xs-2 ">
                            <i class="glyphicon glyphicon-chevron-down dropdown-app-inhoud text-muted"></i>
                        </div>
                        <div class="col-xs-12 user-infos thisshoulddropdown">
                            <form class="">
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
                    </div>
                    <hr>
                </div>
            </div>
            <div class="addbutton">
                <a class="btn btn-primary btn-fab btn-raised" data-toggle="tooltip" title="Pagina toevoegen">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>
        </div>


        <div id="add_category_modal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="background-color:#fff;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Categorie Toevoegen</h4>
                </div>

                <div class="modal-body">
                    <form id="addCategoryForm">
                        <!-- Categorie naam -->
                        <div class="form-group">
                            <label class="control-label" for="tb_cat_name">Categorie naam:</label>
                            <input id="tb_cat_name" class="form-control col-lg-10" type="text" required="required" placeholder="Categorie naam..." />
                        </div>

                        <!-- Categorie omschrijving -->
                        <div class="form-group">
                            <label class="control-label" for="tb_cat_description">Categorie omschrijving:</label>
                            <textarea id="tb_cat_description" class="form-control col-lg-10" required="required" placeholder="Categorie omschrijving..."></textarea>
                        </div>

                        <!-- Opslaan/annuleren -->
                        <button type="submit" id="btn_cat_save" class="btn btn-primary">Opslaan</button>
                        <button id="btn_cat_cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="edit_category_modal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="background-color:#fff;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Categorie Bewerken</h4>
                </div>

                <div class="modal-body ">
                    <form id="editCategoryForm">
                        <!-- Categorie naam -->
                        <div class="form-group">
                            <label class="control-label" for="tb_cat_name">Categorie naam:</label>
                            <input id="tb_cat_name" class="form-control col-lg-10" type="text" required="required" placeholder="Categorie naam..." />
                        </div>

                        <!-- Categorie omschrijving -->
                        <div class="form-group">
                            <label class="control-label" for="tb_cat_description">Categorie omschrijving:</label>
                            <textarea id="tb_cat_description" class="form-control col-lg-10" required="required" placeholder="Categorie omschrijving..."></textarea>
                        </div>

                        <!-- Opslaan/annuleren -->
                        <button type="submit" id="btn_cat_save" class="btn btn-primary">Bijwerken</button>
                        <button id="btn_cat_cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".dropdown-app-inhoud").click(function () {
            $(".thisshoulddropdown").toggle(400);
            $(".dropdown-app-inhoud").toggleClass("up");
        })

        // categorie toevoegen
        $("#addCategoryForm").submit(event, function () {
            event.preventDefault();
            $.post(s_CoreAdress + "?action=addFlowchartCategory", {
                    category_title: $('#tb_cat_name').val(), //verstuurd categorie naam
                    category_description: $("#tb_cat_description").val(),
                })
                .done(function (data) { //voert uit wanneer reactie
                    data = $.parseJSON(data);
                    checklogin(data);
                    if (data["status"] == "true") {
                        var continu = confirm("categorie opgeslagen, druk op OK om verder te gaan."); //vragen of modal afgesloten moet worden
                        if (continu == true) {
                            $("#addCategoryForm input, #addCategoryForm textarea").val("");
                            $('#add_category_modal').modal("hide");
                        } else {
                            $("#addCategoryForm input, #addCategoryForm textarea").val("");
                        }
                    } else {
                        alert("Er is iets niet goed gegaan");
                    }
                })
                .fail(function () {
                    alert("Er is een probleem met uw verbinding, probeer het later nog eens")
                });
        });
        $("#deleteCategory").click(function () {
            //vragen of hij de categorie wilt verwijderen
            deleteConfirmation = confirm("Weet u zeker dat u de categorie met alle onderliggende tips wilt verwijderen");
            if (deleteConfirmation == true) {

                //haalt UUID op uit bovenliggend attribuut
                categoryUUID = $(this).parents("#category-list li").attr("data-cat-uuid");
                categoryID = $(this).parents("#category-list li").attr("data-cat-id");

                //roept back-end aan
                $.post(s_CoreAdress + "?action=deleteFlowchartItem", {
                        category_uuid: categoryUUID, //verstuurd categorie naam
                        item_id: categoryID,
                    })
                    .done(function (data) { //voert uit wanneer reactie
                        data = $.parseJSON(data);
                        checklogin(data);
                        if (data["status"] == "true") {
                            var continu = alert("Categorie verwijderd, druk op OK om verder te gaan.");
                            //TODO: functie maken voor opnieuw laden categorieen
                        } else {
                            alert("Er is iets niet goed gegaan bij verwijderen");
                        }
                    })
                    .fail(function () {
                        alert("Er is een probleem met uw verbinding, probeer het later nog eens")
                    });
            }
        })

        //Categorie bewerken
        $("#editCategory").click(function () {
            //haalt Info op uit aangeklikte atribuut
            categoryUUID = $(this).parents("#category-list li").attr("data-cat-uuid");
            categoryID = $(this).parents("#category-list li").attr("data-cat-id");
            categoryTitle = $(this).siblings(".categoryTitle").text();
            categoryDescription = $(this).siblings(".categoryDescription").text();

            //Doet formulier vullen en openen
            $("#editCategoryForm #tb_cat_name").val(categoryTitle);
            $("#editCategoryForm #tb_cat_description").val(categoryDescription);
            $('#edit_category_modal').modal("show");

            //Maakt verbinding met database
            $("#editCategoryForm").submit(event, function () {
                event.preventDefault();
                $.post(s_CoreAdress + "?action=addFlowchartCategory", {
                        category_uuid: categoryUUID,
                        item_id: categoryID,
                        category_title: $('#editCategoryForm #tb_cat_name').val(), //verstuurd categorie naam
                        category_description: $("#editCategoryForm #tb_cat_description").val(),
                    })
                    .done(function (data) { //voert uit wanneer reactie
                        data = $.parseJSON(data);
                        checklogin(data);
                        if (data["status"] == "true") {
                            var continu = confirm("categorie opgeslagen, druk op OK om verder te gaan."); //vragen of modal afgesloten moet worden
                            if (continu == true) {
                                $("#editCategoryForm input, #editCategoryForm textarea").val("");
                                $('#edit_category_modal').modal("hide");
                            }
                        } else {
                            alert("Er is iets niet goed gegaan");
                        }
                    })
                    .fail(function () {
                        alert("Er is een probleem met uw verbinding, probeer het later nog eens")
                    });
            });
        })
    </script>
    <?php require_once("content/php-include/footer.php"); ?>
