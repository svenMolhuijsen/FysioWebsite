    var s_CoreAdress = "core.php";
    var path = window.location.pathname;
    var page = path.split("/").pop();
    var host = window.location.hostname;

    $(document).ready(function () {

        function checklogin(data) {
            s_LoginStatus = data["login"];

            switch (page) {
            case "login.php":
                if (s_LoginStatus == "true") {
                    location.replace(host + "/index.php");
                };
                break;
            default:
                if (s_LoginStatus == "false") {
                    location.replace(host + "/login.php");
                };
                break;
            }
        }







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
