<?php
	$mail = $_POST['mail'];
	$pass = $_POST['password'];
	
	// Controleren of het wel is ingevuld
	if($mail != '' && $pass != '')
	{
		$status = array('result' => 'success');
	}
	else
	{
		$status = array('result' => 'unsuccessful');
	}
	
	
	echo json_encode($status, JSON_PRETTY_PRINT);
?>
