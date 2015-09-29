$(document).ready(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        tinymce.init({
            selector: 'textarea',
            menubar: false,
            statusbar: false
        });
    })

});
