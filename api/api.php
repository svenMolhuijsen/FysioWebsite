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
    $params = array($_POST['uuid'], $_POST['oldPassword'], $_POST['newPassword']);
    changePassword($params);
    break;
    
    // Sportclub toevoegen
    case 'addSportclub':
    $params = array($_POST['name'], $_POST['address'], $_POST['zipcode'], $_POST['location'], $_POST['phone'], $_POST['mail'], $_POST['contact_person']);
    addSportclub($params);
    break;
    
    // Bericht versturen
    case 'sendMessage':
    $params = array($_POST['therapist_id'], $_POST['sporter_id'], $_POST['chat_message']);
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
    //list therapists
        case 'listTherapists':
		$params = array($_POST['practice_id']);
		listTherapists($params);
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
    
    default:
        header("HTTP/1.0 404 Not Found");
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
}

// Inloggen
function login($params)
{
    $mail = $params[0];
    $password = $params[1];
    
    if($mail == "test" && $password == "test")
    {
        $result = array('status' => 'success', 'uuid' => '28e23bf2-5885-4029-9a9c-6471237db2e8', 'practice_uuid' => '1234-654sf-KSDFI-4597');
    }
    else
    {
        $result = array('status' => 'unsuccessful');
    }
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}

// Wachtwoord vergeten
function forgotPassword($params)
{
  $mail = $params[0];
  
  if($mail == 'test')
  {
    $result = array('status' => 'sent');
  }
  else
  {
    $result = array('status' => 'not send');
  }
  
  echo json_encode($result, JSON_PRETTY_PRINT);
}

// Wachtwoord wijzigen
function changePassword($params)
{
  $uuid = $params[0];
  $oldPassword = $params[1];
  $newPassword = $params[2];
  
  if($uuid == '1234')
  {
    $result = array('status' => 'success');
  }
  else
  {
    $result = array('status' => 'unsuccessful');
  }
  
  echo json_encode($result, JSON_PRETTY_PRINT);
}

// Sportclub toevoegen
function addSportclub($params)
{
  $name = $params[0];
  $address = $params[1];
  $zipcode = $params[2];
  $location = $params[3];
  $phone = $params[4];
  $mail = $params[5];
  $contact_person = $params[6];
  
  if($name == 'error')
  {
    $result = array('status' => 'saved');
  }
  else
  {
    $result = array('status' => 'not saved');
  }
  
  echo json_encode($result, JSON_PRETTY_PRINT);
}

// Bericht versturen
function sendMessage($params)
{
  $therapist_id = $params[0];
  $sporter_id = $params[1];
  $chat_message = $params[2];
  
  if($therapist_id == '1')
  {
    $result = array('status' => 'saved');
  }
  else
  {
    $result = array('status' => 'not saved');
  }
  
  echo json_encode($result, JSON_PRETTY_PRINT);
}

// Standaard antwoord toevoegen
function addDefaultAnswer($params)
{
    $therapist_id = $params[0];
    $sporter_id = $params[1];
    $chat_message = $params[2];
    
    if($therapist_id == '1')
    {
      $result = array('status' => 'sent');
    }
    else
    {
      $result = array('status' => 'not sent');
    }
    
    echo json_encode($result, JSON_PRETTY_PRINT);
}

// Standaard antwoord versturen
function sentDefaultAnswer($params)
{
  $practice_id = $params[0];
  $therapist_id = $params[1];
  $answer_title = $params[2];
  $answer_text = $params[3];
  
  if($practice_id == '1')
  {
    $result = array('status' => 'sent');
  }
  else
  {
    $result = array('status' => 'not sent');
  }
  
  echo json_encode($result, JSON_PRETTY_PRINT);
}

// Sporter wijzigen
function changeSporter($params)
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
function listTherapists()
{
    $practice = $params[1];

    if($practice == "theClubId")
    {
        $result = array();
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
