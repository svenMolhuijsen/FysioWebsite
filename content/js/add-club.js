$(document).ready(function()
{
	// Toevoegen knop
	$(document).on('click', 'btn_add_sportclub', function()
	{
		
	});
	
	// Annuleren knop
	$(document).on('click', 'btn_cancel', function()
	{
		alert("HOI");
		// Alle velden legen
		$('#frm_add_sportclub input').val('');
	});
});
