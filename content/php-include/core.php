<?php
	$action = $_GET['action'];
	switch($action)
	{
		// Inloggen
		case 'login':
			$params = array($_POST['mail'], $_POST['password']);
			login($params);
		break;
		
		// Wachtwoord vergeten
		case 'forgotPassword':
			$params = array($_POST['mail']);
			forgotPassword($params);
		break;
		
		// Wachtwoord wijzigen
		case 'changePassword':
			$params = array($_POST['oldPassword'], $_POST['newPassword']);
			changePassword($params);
		break;
		
		// Sportclub toevoegen
		case 'addSportclub':
			$params = array($_POST['name'], $_POST['address'], $_POST['zipcode'], $_POST['location'], $_POST['phone'], $_POST['mail'], $_POST['contact_person']);
			addSportclub($params);
		break;
		
		// Bericht versturen
		case 'sendMessage':
			$params = array($_POST['sporter_id'], $_POST['chat_message']);
			sendMessage($params);
		break;
		
		// Standaard antwoord toevoegen
		case 'addDefaultAnswer':
			$params = array($_PSOT['practice_id'], $_POST['therapist_id'], $_POST['answer_title'], $_POST['answer_text']);
			addDefaultAnswer($params);
		break;
		
		// Standaard antwoord versturen
		case 'sentDefaultAnswer':
			$params = array($_POST['practice_id'], $_POST['therapist_id'], $_POST['answer_text']);
			sentDefaultAnswer($params);
		break;
		
		// Sporter wijzigen
		case 'changeSporter':
			$params = array($_POST['practice_id'], $_POST['sporter_id'], $_POST['firstName'], $_POST['lastName'], $_POST['age']);
			changeSporter($params);
		break;
		
		// Sportclub wijzigen
		case 'changeSportclub':
			$params = array($_POST['sportclub_id'], $_POST['name'], $_POST['address'], $_POST['zipcode'], $_POST['city'], $_POST['phone'], $_POST['mail']);
			changeSportclub($params);
		break;
		
		// Therapeut wijzigen
		case 'changeTherapist':
			$params = array($_POST['practice_id'], $_POST['therapist_id'], $_POST['firstname'], $_POST['lastname'], $_POST['isAdmin']);
			changeTherapist($params);
		break;
		
		// Sportclubs weergeven
		case 'listSportclubs':
			$params = array($_POST['practice_id']);
			listSportclubs($params);
		break;
		
		// Sporters weergeven
		case 'listSporters':
			$params = array($_POST['practice_id'], $_POST['sportclub_id']);
			listSporters($params);
		break;
		// Sporter weergeven
		case 'displaySporter':
			$params = array($_POST['practice_id'], $_POST['sporter_id']);
			displaySporter($params);
		break;
		
		// Sportclub verwijderen
		case 'deleteSportclub':
			$params = array($_POST['practice_id'], $_POST['sportclub_id']);
			deleteSportclub($params);
		break;
		
		// Chat archiveren
		case 'archiveChat':
			$params = array($_POST['practice_id'], $_POST['chat_id']);
			archiveChat($params);
		break;
		
		// Standaard antwoord bewerken
		case 'editDefaultAnswer':
			$params = array($_POST['practice_id'], $_POST['therapist_id'], $_POST['answer_title'], $_POST['answer_text']);
			editDefaultAnswer($params);
		break;
		
		// Standaard antwoord verwijderen
		case 'deleteDefaultAnswer':
			$params = array($_POST['practice_id'], $_POST['auto_answer_id']);
			deleteDefaultAnswer($params);
		break;
		
		// Flowchart categorie toevoegen
		case 'addFlowchartCategory':
			$params = array($_POST['practice_id'], $_POST['category_title'], $_POST['category_description']);
			addFlowChartCategory($params);
		break;
		
		// Flowchart categorie bewerken
		case 'editFlowchartCategory':
			$params = array($_POST['practice_id'], $_POST['category_id'], $_POST['category_title'], $_POST['category_description']);
			editFlowChartCategory($params);
		break;
		
		// Flowchart categorie verwijderen
		case 'deleteFlowchartCategory':
			$params = array($_POST['practice_id'], $_POST['category_id']);
			deleteFlowChartCategory($params);
		break;
		
		// Flowchart item toevoegen
		case 'addFlowchartItem':
			$params = array($_POST['practice_id'], $_POST['category_id'], $_POST['item_title'], $_POST['item_text']);
			addFlowChartItem($params);
		break;
		
		// Flowchart item bewerken
		case 'editFlowchartItem':
			$params = array($_POST['practice_id'], $_POST['category_id'], $_POST['item_id'], $_POST['item_title'], $_POST['item_text']);
			editFlowchartItem($params);
		break;
		
		// Flowchart item verwijderen
		case 'deleteFlowchartItem':
			$params = array($_POST['practice_id'], $_POST['category_id'], $_POST['item_id']);
			deleteFlowchartItem($params);
		break;
		
		default:
			header('HTTP/1.0 404 NOT FOUND');
		break;
	}
	
	// Inloggen
	function login($params)
	{
		$mail = $params[0];
		$password = $params[1];
		
		if($mail == 'test@test.nl' && $password == 'test')
		{
			$result = array('login' => 'true', 'therapist_uuid' => '550e8400-e29b-41d4-a716-446655440000', 'practice_uuid' => '550e8400-e29b-41d4-a716-446655440123');
			$_SESSION['therapist_uuid'] = '550e8400-e29b-41d4-a716-446655440000';
			$_SESSION['practice_uuid'] = '550e8400-e29b-41d4-a716-446655440123';
		}
		else
		{
			$result = array('login' => 'false');
		}
		
		echo json_encode($result);
	}
	
	// Is ingelogd
	function isLoggedIn()
	{
		$therapist_uuid = $_SESSION['therapist_uuid'];
		$practice_uuid = $_SESSION['practice_uuid'];
		
		if($therapist_uuid == '550e8400-e29b-41d4-a716-446655440000' && $practice_uuid == '550e8400-e29b-41d4-a716-446655440123')
		{
			// Is ingelogd
			return true;
		}
		
		// Niet ingelogd
		return false;
	}
	
	// Wachtwoord vergeten
	function forgotPassword($params)
	{
		$mail = $params[0];
		
		if($mail == 'test@test.nl')
		{
			$result = array('login' => 'false', 'status' => 'true');
		}
		else
		{
			$result = array('login' => 'false', 'status' => 'false');
		}
		
		echo json_encode($result);		
	}
	
	// Wachtwoord wijzigen
	function changePassword($params)
	{
		if(isLoggedIn() == true)
		{
			$therapist_uuid = $_SESSION['therapist_uuid'];
			$oldPassword = $params[0];
			$newPassword = $params[1];
			if($therapist_uuid == '550e8400-e29b-41d4-a716-446655440000' && $oldPassword == 'test' && $newPassword == '')
			{
				$result = array('login' => 'true', 'status' => 'true');
			}
			else
			{
				$result = array('login' => 'true', 'status' => 'false');
			}
		}
		else
		{
			$result = array('login' => 'false');
		}
		
		echo json_encode($result);
	}
	
	// Sportclub toevoegen
	function addSportclub($params)
	{
		if(isLoggedIn() == true)
		{
			$therapist_uuid = $_SESSION['therapist_uuid'];
			$name = $params[0];
			$address = $params[1];
			$zipcode = $params[2];
			$location = $params[3];
			$phone = $params[4];
			$mail = $params[5];
			$contact_person = $params[6];
			if($name == 'test')
			{
				$result = array('login' => 'true', 'status' => 'true');
			}
			else
			{
				$result = array('login' => 'true', 'status' => 'false');
			}
		}
		else
		{
			$result = array('login' => 'false');
		}
		
		echo json_encode($result);
	}
	
	// Bericht versturen
	function sendMessage($params)
	{
		if(isLoggedIn() == true)
		{
			$therapist_uuid = $_SESSION['therapist_uuid'];
			$sporter_id = $params[1];
			$chat_message = $params[2];
			if($therapist_uuid == '550e8400-e29b-41d4-a716-446655440000')
			{
				$result = array('login' => 'true', 'status' => 'true');
			}
			else
			{
				$result = array('login' => 'true', 'status' => 'false');
			}
		}
		else
		{
			$result = array('login' => 'false');
		}
		
		echo json_encode($result);
	}
	
	// Standaard antwoord toevoegen
	function addDefaultAnswer($params)
	{
		if(isLoggedIn() == true)
		{
			$therapist_uuid = $_SESSION['therapist_uuid'];
			$sporter_id = $params[0];
			$chat_message = $params[1];
			if($therapist_uuid == '550e8400-e29b-41d4-a716-446655440000')
			{
			  $result = array('login' => 'true', 'status' => 'true');
			}
			else
			{
			  $result = array('login' => 'true', 'status' => 'false');
			}
		}
		else
		{
			$result = array('login' => 'false');
		}
		
		echo json_encode($result);
	}
	// Standaard antwoord versturen
	function sentDefaultAnswer($params)
	{
		if(isLoggedIn() == true)
		{
			$practice_uuid = $_SESSION['practice_uuid'];
			$therapist_uuid = $_SESSION['therapist_uuid'];
			$answer_title = $params[0];
			$answer_text = $params[1];
			if($therapist_uuid == '550e8400-e29b-41d4-a716-446655440000')
			{
				$result = array('login' => 'true', 'status' => 'true');
			}
			else
			{
				$result = array('login' => 'true', 'status' => 'false');
			}
		}
		else
		{
			$result = array('login' => 'false');
		}
		
		echo json_encode($result);
	}
	
	// Sporter wijzigen
	function changeSporter($params)
	{
		if(isLoggedIn() == true)
		{
			$practice_id = $params[0];
			$sporter_id = $params[1];
			$firstName = $params[2];
			$lastName = $params[3];
			$age = $params[4];
			if($practice_id == '1')
			{
				$result = array('status' => 'saved');
			}
			else
			{
				$result = array('status' => 'not saved');
			}
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	// Sportclub wijzigen
	function changeSportclub($params)
	{
		$sportclub_id = $params[0];
		$name = $params[1];
		$address = $params[2];
		$zipcode = $params[3];
		$city = $params[4];
		$phone = $params[5];
		$mail = $params[6];
		$contact_person = $params[7];
		if($sportclub_id == '1')
		{
			$result = array('status' => 'saved');
		}
		else
		{
			$result = array('status' => 'not saved');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Overzicht van therapeuten
	function listTherapist($params)
	{
		if($practice == "theClubId")
		{
			$result = array("status"=>"success", "users" =>array("user"=>array("userID"=>"123122", "voornaam" => "Henk", "achternaam" =>"Baltissen", "specialismen"=>"knie, enkel", "datum-in-dienst"=>"1997-04-01", "geboortedatum"=>"1997-04-01", "geslacht"=>"m", "email"=>"Bart.Kessels@gmail.com", "telefoonnummer"=>"31634194230"));
		}
		else
		{
			$result = array('status' => 'unsuccessful');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Therapeut wijzigen
	function changeTherapist($params)
	{
		$practice_id = $params[0];
		$therapist_id = $params[1];
		$firstname = $params[2];
		$isAdmin = $params[3];
		if($practice_id == '1')
		{
			$result = array('result' => 'saved');
		}
		else
		{
			$result = array('result' => 'not saved');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Sportclubs weergeven
	function listSportclubs($params)
	{
		$practice_id = $params[0];
		if($practice_id == '1')
		{
			$result = array('sportclub' => array('name' => 'Ajax', 'contact_person' => 'Hans'), 'sportclub' => array('name' => 'PSV', 'contact_person' => 'HEnk'));
		}
		else
		{
			$result = array('status', 'not found');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Sporters weergeven
	function listSporters($params)
	{
		$practice_id = $params[0];
		$sporter_id = $params[1];
		if($practice_id == '1')
		{
			$result = array('sporter' => array('firstname' => 'Jan', 'lastname' => 'Janssen', 'age' => '13'), 'sporter' => array('firstname' => 'Hans', 'lastname' => 'Hanssen', 'age' => '36'));
		}
		else
		{
			$result = array('status' => 'not found');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Sporter weergeven
	function displaySporter($params)
	{
		$practice_id = $params[0];
		$sporter_id = $params[1];
		if($practice_id == '1')
		{
			$result = array('firstname' => 'Jan', 'lastname' => 'Janssen', 'age' => '345');
		}
		else
		{
			$result = array('status' => 'not found');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Sportclub verwijderen
	function deleteSportclub($params)
	{
		$practice_id = $params[0];
		$sportclub_id = $params[1];
		if($practice_id == '1')
		{
			$result = array('status' => 'deleted');
		}
		else
		{
			$result = array('status' => 'not deleted');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Chat archiveren
	function archiveChat($params)
	{
		$practice_id = $params[0];
		$chat_id = $params[1];
		if($practice_id == '1')
		{
			$result = array('status' => 'archived');
		}
		else
		{
			$result = array('status' => 'not archived');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Standaard antwoord wijzigen
	function editDefaultAnswer($params)
	{
		$practice_id = $params[0];
		$therapist_id = $params[1];
		$answer_title = $params[2];
		$answer_text = $params[3];
		if($practice_id == '1')
		{
			$result = array('status' => 'saved');
		}
		else
		{
			$result = array('status' => 'not saved');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Standaard antwoord verwijderen
	function deleteDefaultAnswer($params)
	{
		$practice_id = $params[0];
		$auto_answer_id = $params[1];
		if($practice_id == '1')
		{
			$result = array('status' => 'deleted');
		}
		else
		{
			$result = array('status' => 'not deleted');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Flowchart categorie opslaan
	function addFlowchartCategory($params)
	{
		$practice_id = $params[0];
		$category_title = $params[1];
		$category_description = $params[2];
		if($practice_id == '1')
		{
			$result = array('status' => 'added');
		}
		else
		{
			$result = array('status' => 'not added');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Flowchart categorie bewerken
	function editFlowchartCategory($params)
	{
		$practice_id = $params[0];
		$category_id = $params[1];
		$category_title = $params[2];
		$category_description = $params[3];
		if($practice_id == '1')
		{
			$result = array('status' => 'saved');
		}
		else
		{
			$result = array('status' => 'not saved');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Flowchart categorie verwijderen
	function deleteFlowchartCategory($params)
	{
		$practice_id = $params[0];
		$category_id = $params[1];
		if($practice_id == '1')
		{
			$result = array('status' => 'deleted');
		}
		else
		{
			$result = array('status' => 'not deleted'):
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Flowchart item toevoegen
	function addFlowchartItem($params)
	{
		$practice_id = $params[0];
		$category_id = $params[1];
		$item_title = $params[2];
		$item_text = $params[3];
		if($practice_id == '1')
		{
			$result = array('status' => 'added');
		}
		else
		{
			$result = array('status' => 'not added');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Flowchart item bewerken
	function editFlowchartItem($params)
	{
		$practice_id = $params[0];
		$category_id = $params[1];
		$item_id = $params[2];
		$item_title = $params[3];
		$item_text = $params[4];
		if($practice_id == '1')
		{
			$result = array('status' => 'saved');
		}
		else
		{
			$result = array('status' => 'not saved');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
	
	// Flowchart item verwijderen
	function removeFlowchartItem($params)
	{
		$practice_id = $params[0];
		$category_id = $params[1];
		$item_id = $params[2];
		if($practice_id == '1')
		{
			$result = array('status' => 'deleted');
		}
		else
		{
			$result = array('status' => 'not deleted');
		}
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
?>
