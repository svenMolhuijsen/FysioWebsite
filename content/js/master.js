    var s_CoreAdress = "core.php";

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


    });
