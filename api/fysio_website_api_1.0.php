<?php
	class fysioWebsite
	{
		// STANDAARD FUNCTIES ------------------------------------------
		// Inloggen
		function login($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$mail = $params->mail;
			$password = $params->password;
			
			if($mail == 'test')
			{
				// Gelukt
				$result = array('status' => 'success', 'therapist_uuid' => '28e23bf2-5885-4029-9a9c-6471237db2e8', 'practice_uuid' => '28e23bf2-5885-4029-9a9c-6471237db2e8');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'unsuccessful');
			}			
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Wachtwoord vergeten
		function forgotPassword($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$mail = $params->mail;
			
			if($mail == 'test')
			{
				// Gelukt
				$result = array('status' => 'sent');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not sent');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Wachtwoord wijzigen
		function changePassword($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$oldPassword = $params->oldPassword;
			$newPassword = $params->newPassword;
			
			if($oldPassword == 'test')
			{
				// Gelukt
				$result = array('status' => 'success');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'unsuccessful');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// SPORTCLUB ---------------------------------------------------		
		// Sportclub toevoegen
		function addSportclub($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$name = $params->name;
			$address = $params->address;
			$zipcode = $params->zipcode;
			$location = $params->location;
			$phone = $params->phone;
			$mail = $params->mail;
			$contact_person = $params->contact_person;
			
			if($name == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Sportclub bewerken
		function changeSportclub($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$sportclub_uuid = $params->sportclub_uuid;
			$name = $params->name;
			$address = $params->address;
			$zipcode = $params->zipcode;
			$city = $params->city;
			$phone = $params->phone;
			$mail = $params->mail;
			$contact_person = $params->contact_person;
			
			if($name == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Overzicht sportclubs
		function listSportclubs($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			
			$result = array('sportclub' => array('sportclub_uuid' => '123456', 'name' => 'PSV', 'address' => 'Melkweg 123', 'zipcode' => '124KD', 'city' => 'Venray', 'phone' => '0147585459', 'mail' => 'info@psv.nl', 'contact_person' => 'HENK'), 'sportclub' => array('sportclub_uuid' => '12sd56', 'name' => 'Ajax', 'address' => 'Ajaxweg 123', 'zipcode' => '124AJ', 'city' => 'Oostrum', 'phone' => '0197585459', 'mail' => 'mail-@j.ax', 'contact_person' => 'Hans'));
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Sportclub verwijderen
		function deleteSportclub($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$sportclub_uuid = $params->sportclub_uuid;
			
			if($therapist_uuid == '28e23bf2-5885-4029-9a9c-6471237db2e8')
			{
				// Gelukt
				$result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// CHAT BERICHTEN ----------------------------------------------
		// Bericht versturen
	function sendMessage($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$sporter_uuid = $params->sporter_uuid;
			$chat_message = $params->chat_message;
			
			if($chat_message == 'test')
			{
				// Gelukt
				$result = array('status' => 'sent');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not sent');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Chat archiveren
		function archiveChat($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$chat_uuid = $params->chat_uuid;
			
			if($chat_uuid == '123456')
			{
				// Gelukt
				$result = array('status' => 'archived');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not archived');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// STANDAARD ANTWOORDEN ----------------------------------------
		// Standaard antwoord toevoegen
		function addDefaultAnswer($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$answer_title = $params->answer_title;
			$answer_text = $params->answer_text;
			
			if($answer_title == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Standaard antwoorden weergeven
		function listDefaultAnswers($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			
			$result = array('defaultAnswer' => array('defaultAnswer_uuid' => '123456', 'answer_title' => 'Standaard reactie rugprobleem', 'answer_text' => 'Niet onderuit gezakt gaan zitten.'), 'defaultAnswer' => array('defaultAnswer_uuid' => '123456', 'answer_title' => 'Standaard reactie voetprobleem', 'answer_text' => 'Regelmatig lopen.'));
			
			// Resultaat terugsturen
			echo json_encode($result);			
		}
		
		// Standaard antwoord bewerken
		function editDefaultAnswer($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$defaultAnswer_uuid = $params->defaultAnswer_uuid;
			$answer_title = $params->answer_title;
			$answer_text = $params->answer_text;
			
			if($answer_title == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Standaard antwoord verwijderen
		function deleteDefaultAnswer($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$defaultAnswer_uuid = $params->defaultAnswer_uuid;
			
			if($defaultAnswer_uuid == '123456')
			{
				// Gelukt
				$result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// SPORTER -----------------------------------------------------
		// Sporter bewerken
		function changeSporter($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$sporter_uuid = $params->sporter_uuid;
			$firstName = $params->firstName;
			$lastName = $params->lastName;
			$age = $params->age;
			
			if($firstName == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Overzicht sporters
		function listSporters($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$sportclub_uuid = $params->sportclub_uuid;
			
			$result = array('sporter' => array('sporter_uuid' => '321654', 'firstName' => 'Michel', 'lastName' => 'Mertens', 'age' => '15'), 'sporter' => array('sporter_uuid' => '987654', 'firstName' => 'Sven', 'lastName' => 'Molhuijsen', 'age' => '110'));
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Sporter weergeven
		function displaySporter($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$sporter_uuid = $params->sporter_uuid;
			
			$result = array('firstName' => 'Michel', 'lastName' => 'Mertens', 'age' => '15');
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// THERAPEUT ---------------------------------------------------
		// Therapeut bewerken
		function changeTherapist($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$firstName = $params->firstName;
			$lastName = $params->lastName;
			$mail = $params->mail;
			$password = $params->password;
			$isAdmin = $params->isAdmin;
			
			if($firstName == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Therapeut toevoegen
		function addTherapist($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$firstName = $params->firstName;
			$lastName = $params->lastName;
			$mail = $params->mail;
			$password = $params->password;
			$isAdmin = $params->isAdmin;
			
			if($firstName == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// DOORKLIK CATEGORIE ------------------------------------------
		// Doorklik categories weergeven
		function listFlowchartCategories($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			
			$result = array('flowchartCategory' => array('category_uuid' => '123456', 'category_title' => 'Onderbeen', 'category_description' => 'Alle tips over onderbeen pijn'), 'flowchartCategory' => array('category_uuid' => '1234567', 'category_title' => 'Bovenbeen', 'category_description' => 'Alle tips over bovenbeen pijn'));
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Doorklik categorie toevoegen
		function addFlowchartCategory($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_title = $params->category_title;
			$category_description = $params->category_description;
			
			if($category_title == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Doorklik categorie bewerken
		function editFlowchartCategory($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_uuid = $params->category_uuid;
			$category_title = $params->category_title;
			$category_description = $params->category_description;
			
			if($category_title == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Doorklik categorie verwijderen
		function deleteFlowchartCategory($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_uuid = $params->category_uuid;
			
			if($category_uuid == '123456')
			{
				// Gelukt
				$result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// DOORKLIK ITEMS ----------------------------------------------
		// Doorklik items weergeven
		function listFlowchartItems($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_uuid = $params->category_uuid;
			
			$result = array('flowchartItem' => array('item_uuid' => '123456', 'item_title' => 'Koelen', 'item_text' => 'Een goede manier is de pijnlijke plek koelen'), 'flowchartItem' => array('item_uuid' => '1234567', 'item_title' => 'Verwarmen', 'item_text' => 'Een goede manier is de pijnlijke plek verwarmen'));
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Doorklik item toevoegen
		function addFlowchartItem($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_uuid = $params->category_uuid;
			$item_title = $params->item_title;
			$item_text = $params->item_text;
			
			if($item_title == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Doorklik item bewerken
		function editFlowchartItem($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_uuid = $params->category_uuid;
			$item_uuid = $params->item_uuid;
			$item_title = $params->item_title;
			$item_text = $params->item_text;
			
			if($item_title == 'test')
			{
				// Gelukt
				$result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
		
		// Doorklik item verwijderen
		function deleteFlowchartItem($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$therapist_uuid = $params->therapist_uuid;
			$practice_uuid = $params->practice_uuid;
			$category_uuid = $params->category_uuid;
			$item_uuid = $params->item_uuid;
			
			if($item_uuid == '123456')
			{
				// Gelukt
				$result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($result);
		}
	}
?>
