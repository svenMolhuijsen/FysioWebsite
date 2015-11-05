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
			$s_mail = $params->mail;
			$s_password = $params->password;
			
			if($s_mail == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'success', 'therapist_uuid' => '28e23bf2-5885-4029-9a9c-6471237db2e8', 'practice_uuid' => '28e23bf2-5885-4029-9a9c-6471237db2e8');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'unsuccessful');
			}			
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Wachtwoord vergeten
		function forgotPassword($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_mail = $params->mail;
			
			if($s_mail == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'sent');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not sent');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Wachtwoord wijzigen
		function changePassword($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_oldPassword = $params->oldPassword;
			$s_newPassword = $params->newPassword;
			
			if($s_oldPassword == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'success');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'unsuccessful');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// SPORTCLUB ---------------------------------------------------		
		// Sportclub toevoegen
		function addSportclub($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_name = $params->name;
			$s_address = $params->address;
			$s_zipcode = $params->zipcode;
			$s_location = $params->location;
			$i_phone = $params->phone;
			$s_mail = $params->mail;
			$s_contact_person = $params->contact_person;
			
			if($s_name == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Sportclub bewerken
		function changeSportclub($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_sportclub_uuid = $params->sportclub_uuid;
			$s_name = $params->name;
			$s_address = $params->address;
			$s_zipcode = $params->zipcode;
			$s_city = $params->city;
			$i_phone = $params->phone;
			$s_mail = $params->mail;
			$s_contact_person = $params->contact_person;
			
			if($s_name == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Overzicht sportclubs
		function listSportclubs($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			
			$a_result = array('sportclub' => array('sportclub_uuid' => '123456', 'name' => 'PSV', 'address' => 'Melkweg 123', 'zipcode' => '124KD', 'city' => 'Venray', 'phone' => '0147585459', 'mail' => 'info@psv.nl', 'contact_person' => 'HENK'), 'sportclub' => array('sportclub_uuid' => '12sd56', 'name' => 'Ajax', 'address' => 'Ajaxweg 123', 'zipcode' => '124AJ', 'city' => 'Oostrum', 'phone' => '0197585459', 'mail' => 'mail-@j.ax', 'contact_person' => 'Hans'));
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Sportclub verwijderen
		function deleteSportclub($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_sportclub_uuid = $params->sportclub_uuid;
			
			if($s_therapist_uuid == '28e23bf2-5885-4029-9a9c-6471237db2e8')
			{
				// Gelukt
				$a_result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// CHAT BERICHTEN ----------------------------------------------
		// Bericht versturen
	function sendMessage($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_sporter_uuid = $params->sporter_uuid;
			$s_chat_message = $params->chat_message;
			
			if($s_chat_message == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'sent');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not sent');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Chat archiveren
		function archiveChat($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_chat_uuid = $params->chat_uuid;
			
			if($s_chat_uuid == '123456')
			{
				// Gelukt
				$a_result = array('status' => 'archived');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not archived');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// STANDAARD ANTWOORDEN ----------------------------------------
		// Standaard antwoord toevoegen
		function addDefaultAnswer($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_nswer_title = $params->answer_title;
			$s_answer_text = $params->answer_text;
			
			if($s_answer_title == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Standaard antwoorden weergeven
		function listDefaultAnswers($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			
			$a_result = array('defaultAnswer' => array('defaultAnswer_uuid' => '123456', 'answer_title' => 'Standaard reactie rugprobleem', 'answer_text' => 'Niet onderuit gezakt gaan zitten.'), 'defaultAnswer' => array('defaultAnswer_uuid' => '123456', 'answer_title' => 'Standaard reactie voetprobleem', 'answer_text' => 'Regelmatig lopen.'));
			
			// Resultaat terugsturen
			echo json_encode($a_result);			
		}
		
		// Standaard antwoord bewerken
		function editDefaultAnswer($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_defaultAnswer_uuid = $params->defaultAnswer_uuid;
			$s_answer_title = $params->answer_title;
			$s_answer_text = $params->answer_text;
			
			if($s_answer_title == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Standaard antwoord verwijderen
		function deleteDefaultAnswer($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_defaultAnswer_uuid = $params->defaultAnswer_uuid;
			
			if($s_defaultAnswer_uuid == '123456')
			{
				// Gelukt
				$a_result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// SPORTER -----------------------------------------------------
		// Sporter bewerken
		function changeSporter($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_sporter_uuid = $params->sporter_uuid;
			$s_firstName = $params->firstName;
			$s_lastName = $params->lastName;
			$i_age = $params->age;
			
			if($s_firstName == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Overzicht sporters
		function listSporters($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_sportclub_uuid = $params->sportclub_uuid;
			
			$a_result = array('sporter' => array('sporter_uuid' => '321654', 'firstName' => 'Michel', 'lastName' => 'Mertens', 'age' => '15'), 'sporter' => array('sporter_uuid' => '987654', 'firstName' => 'Sven', 'lastName' => 'Molhuijsen', 'age' => '110'));
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Sporter weergeven
		function displaySporter($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_sporter_uuid = $params->sporter_uuid;
			
			$a_result = array('firstName' => 'Michel', 'lastName' => 'Mertens', 'age' => '15');
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// THERAPEUT ---------------------------------------------------
		// Therapeut bewerken
		function changeTherapist($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_firstName = $params->firstName;
			$s_lastName = $params->lastName;
			$s_mail = $params->mail;
			$s_password = $params->password;
			$i_isAdmin = $params->isAdmin;
			
			if($s_firstName == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Therapeut toevoegen
		function addTherapist($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_firstName = $params->firstName;
			$s_lastName = $params->lastName;
			$s_mail = $params->mail;
			$s_password = $params->password;
			$i_isAdmin = $params->isAdmin;
			
			if($s_firstName == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// DOORKLIK CATEGORIE ------------------------------------------
		// Doorklik categories weergeven
		function listFlowchartCategories($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			
			$a_result = array('flowchartCategory' => array('category_uuid' => '123456', 'category_title' => 'Onderbeen', 'category_description' => 'Alle tips over onderbeen pijn'), 'flowchartCategory' => array('category_uuid' => '1234567', 'category_title' => 'Bovenbeen', 'category_description' => 'Alle tips over bovenbeen pijn'));
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Doorklik categorie toevoegen
		function addFlowchartCategory($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_title = $params->category_title;
			$s_category_description = $params->category_description;
			
			if($s_category_title == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Doorklik categorie bewerken
		function editFlowchartCategory($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_uuid = $params->category_uuid;
			$s_category_title = $params->category_title;
			$s_category_description = $params->category_description;
			
			if($s_category_title == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Doorklik categorie verwijderen
		function deleteFlowchartCategory($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_uuid = $params->category_uuid;
			
			if($s_category_uuid == '123456')
			{
				// Gelukt
				$a_result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// DOORKLIK ITEMS ----------------------------------------------
		// Doorklik items weergeven
		function listFlowchartItems($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_uuid = $params->category_uuid;
			
			$a_result = array('flowchartItem' => array('item_uuid' => '123456', 'item_title' => 'Koelen', 'item_text' => 'Een goede manier is de pijnlijke plek koelen'), 'flowchartItem' => array('item_uuid' => '1234567', 'item_title' => 'Verwarmen', 'item_text' => 'Een goede manier is de pijnlijke plek verwarmen'));
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Doorklik item toevoegen
		function addFlowchartItem($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_uuid = $params->category_uuid;
			$s_item_title = $params->item_title;
			$s_item_text = $params->item_text;
			
			if($s_item_title == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Doorklik item bewerken
		function editFlowchartItem($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_uuid = $params->category_uuid;
			$s_item_uuid = $params->item_uuid;
			$s_item_title = $params->item_title;
			$s_item_text = $params->item_text;
			
			if($s_item_title == 'test')
			{
				// Gelukt
				$a_result = array('status' => 'saved');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not saved');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
		
		// Doorklik item verwijderen
		function deleteFlowchartItem($params)
		{
			// JSON decoden
			$params = json_decode($params);
			
			// Variabelen uit object halen
			$s_therapist_uuid = $params->therapist_uuid;
			$s_practice_uuid = $params->practice_uuid;
			$s_category_uuid = $params->category_uuid;
			$s_item_uuid = $params->item_uuid;
			
			if($s_item_uuid == '123456')
			{
				// Gelukt
				$a_result = array('status' => 'deleted');
			}
			else
			{
				// Niet gelukt
				$a_result = array('status' => 'not deleted');
			}
			
			// Resultaat terugsturen
			echo json_encode($a_result);
		}
	}
?>
