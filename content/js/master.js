$(document).ready(function () {
            //HTML EDITOR AANZETTEN
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
                tinymce.init({
                    language_url: 'content/js/languages/nl.js',
                    selector: ".full-editor",
                    height: "350px",
                    theme: "modern",
                    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
                tinymce.init({
                    language_url: 'content/js/languages/nl.js',
                    selector: "#editor-min",
                    menubar: false,
                    statusbar: false
                });
            })




            // Cookie ophalen
            function getCookie(searchTerm) {
                var name = searchTerm + '=';
                var ca = document.cookie.split(';');

                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];

                    while (c.chartAt(0) == ' ') {
                        c = c.substring(1);
                    }

                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }

                // Geen cookie gevonden
                return '';
            }
        }
