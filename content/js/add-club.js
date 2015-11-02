$(document).ready(function()
{
	// Toevoegen knop
	$(document).on('click', '#btn_add_sportclub', function()
	{
    // Velden
    var name = $('#tb_name').val();
    var address =$('#tb_adress').val();
    var zipcode = $('#tb_zipcode').val();
    var city = $('#tb_location').val();
    var phone = $('#tb_phone').val();
    var mail = $('#tb_mail').val();
    var contact_person = $('#tb_contactperson').val();

    // Controlleren of alles is ingevuld
    if(name != '' && address != '' && zipcode != '' && city != '' && phone != '' && mail != '' && contact_person != '')
    {
      // Gegevens naar API sturen
      $.post('api/api.php?action=addSportclub', {name:name,address:address,zipcode:zipcode,location:city,phone:phone,mail:mail,contact_person:contact_person}, function(result)
      {
        // JSON result omzetten naar var
        res = JSON.parse(result);

        // Kijken of het result true is
        if(res.status == 'saved')
        {
          // Laten weten dat het is opgeslagen
          alert('De sportclub is toegevoegd!');

          // Alle velden legen
          $('#frm_add_sportclub input').val('');
        }
        else
        {
          // Het is niet opgeslagen
          alert('De sportclub is niet opgeslagen...');
        }
      });
    }
    else
    {
      // Niet alles is ingevuld
      alert('Niet alle velden zijn ingevuld...');
    }
	});

	// Annuleren knop
	$(document).on('click', '#btn_cancel_sportclub', function()
	{
		// Alle velden legen
		$('#frm_add_sportclub input').val('');
	});
});
