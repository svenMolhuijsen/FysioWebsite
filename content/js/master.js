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

    //DROPDOWN BIJ CHAT ENZO
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();
    //Click dropdown
    panelsButton.click(function () {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function () {
            //Completed slidetoggle
            if (idFor.is(':visible')) {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            } else {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });

    //TOOLTIP ACTIVEREN
    $('[data-toggle="tooltip"]').tooltip();


    //THERAPIST WIJZIGEN FORMULIER
    var table = $(".table-therapist-information tbody");
    table.find(' tr').each(function (i, el) {
        var text = $(this).find('td span').text();
        $(this).find('td input').val(text);
    });

    $(".toggleForm").click(function () {
        $(".table-therapist-information span, .table-therapist-information input, .table-therapist-information select, .editTherapistBtn").toggle(400);

    });

});


// Cookie ophalen
function getCookie(cname)
{
  var name = cname + '=';
  var ca = document.cookie.split(';');

  for(var i = 0; i < ca.length; i++)
  {
    var c = ca[i];

    while(c.chartAt(0) == ' ')
    {
      c = c.substring(1);
    }

    if(c.indexOf(name) == 0)
    {
      return c.substring(name.length, c.length);
    }
  }

  // Geen cookie gevonden
  return '';
}
