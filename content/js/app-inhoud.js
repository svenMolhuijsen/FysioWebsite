$(document).ready(function () {
            // App inhoud categorie toevoegen
            $(document).on('click', '#btn_cat_save', function () {
                // Alle velden verkrijgen
                var cat_name = $('#tb_cat_name').val();
                var cat_description = $('#tb_cat_description').val();
                var practice_uuid = getCookie('practice_uuid'); //!DEZE VARIABLE ZIJN AL GEGENEREERD IN MASTER.JS GRAAG AANPASSEN XXX SVEN !


                // Controleren of alles is ingevuld
                if (cat_name != '' && cat_description != '') {
                    $.post('api/api.php?action=addFlowchartCategory', {
                            practice_id: practice_uuid,
                            category_title: cat_title,
                            category_description: cat_description
                        }, function (result) {
                            // Kijken of het is opgeslagen
                            if (result == 'saved') {
                                alert('De categorie is opgeslagen');

                                // Velden legen


                                // Categorieen opnieuw inladen
                            }
                        }
                    } else {
                        // Niet alles is ingevuld
                        alert('Vul aub alle velden in.');
                    }
                };

                function getCategories() {

                }
            });
