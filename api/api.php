<?php

$action = $_GET['action'];

switch($action)
{
    case "login":
        $params = array($_POST['username'], $_POST['password']);
        getLogin($params);
    break;
    case "getUserData":
        $params = array($_POST['username']);
        getUserData($params);
    break;
    default:
        header("HTTP/1.0 404 Not Found");
    break;
}

function getLogin($params)
{
    $username = $params[0];
    $password = $params[1];
    if($username && $password)
    {
        if($username == "test" && $password == "test")
        {
            echo '{ "success": "true", "message": "success." }';
        }
        else
        {
            echo '{ "success": "false", "message": "Wachtwoord of gebruikersnaam is onjuist." }';
        }
    }
    else 
    {
             echo '{ "success": "false", "message": "Vul aub allen velden in." }';
    }
}

function getUser($params)
{
    $username = $params[0];

    if($username)
    {
        echo '{ "success": "true", "username": "Test", "firstname": "Lars", "lastname": "Janssen",    "address": "Boschlaan 10",    "zip": "5993HK" }';
    }
    else
    {
        echo '
			{ 
				"success": false, 
				"message": "error" 
			}
        ';
    }
}

function getTips($params)
{
    $therapist = $params[0];
    $searchquery = $params[1];

    if($therapist)
    {
        if($searchquery)
        {
            // get tips with keyword

            echo '
				{
					"tips": [
						{
							"uuid": "1",
							"name": "Bloeding achterhoofd",
							"description": "Ja hoofd is kapot"
						}
					]
				}
            ';
        }
        else
        {
            echo '
				{
					"bodyparts": [
						{
							"uuid": "1",
							"name": "Hoofd",
							"description", "Hoofdletsel",
							"tips": [
								{
									"uuid": "1",
									"name": "Bloeding achterhoofd",
									"description": "Ja hoofd is kapot"
								},
								{
									"uuid": "2",
									"name": "Bloeding neus",
									"description": "Ja neus is kapot"
								}
							]
						}
					]
				}
            ';
        }
    }
}

function setPasswordRecoveryEmail($params)
{
    $email = $params[0];

    if($email)
    {
        // send

         echo '{ "success": "true", "message": "Er is een e-mail verstuurd." }';
    }
    else
    {
         echo '{ "success": "false", "message": "Er is geen account gevonden met dit e-mail adres, of er is geen e-mail ingevuld." }';
    }
}

function setPassword($params)
{
    $email = $params[0];
    $password = $params[1];
    $repeat = $params[2];

    if($email)
    {
        if($password && $password == $repeat)
        {
            // set password

            echo '{ "success": "true", "message": "Het account is gewijzigd." }';
        }
        else
        {
            echo '{ "success": "false", "message": "Wachtwoord niet ingevuld, of het wachtwoord klopt niet met het herhalingwachtwoord." }';
        }
    }
    else
    {
        echo '{ "success": "false", "message": "E-mail adres is niet ingevuld." }';
    }
}

function setMessage($params)
{
    $uuid = $params[0];
    $therapist = $params[1];
    $message = $params[2];
    $image = $params[3];

    if($uuid && $therapist){
        if($message)
        {
            if(!$image)
            {
                $image = null;
            }
            // send message

            echo '{ "success": "true", "user": "'.$uuid.'", "therapist": "'.$therapist.'", message": "'.$message.'", "image": "'.$image.'" }';
        }
        else
        {
            echo '{ "success": "false", "message": "Geen bericht ingevuld." }';
        }
    }
    else
    {
        echo '{ "success": "false", "message": "Fout." }';
    }
}

function getMessages($params)
{
    $uuid = $params[0];
    $therapist = $params[1];

    if($uuid && $therapist)
    {
        echo '
        "messages": [
                {
                    "uuid": "1",
                    "user": "Bjorn",
                    "userpicture": "http://www.morganstanley.com/assets/images/people/tiles/michael-asmar.jpg",
                    "message": "Hallo",
                    "image": ""
                },
                {
                    "uuid": "2",
                    "user": "Lars",
                    "userpicture": "http://www.morganstanley.com/assets/images/people/tiles/michael-asmar.jpg",
                    "message": "Hey.",
                    "image": ""
                }
            ]
        ';
    }
    else
    {
        echo '{ "success": "false", "message": "Fout." }';
    }
}

function getInjuries($params)
{
    $uuid = $params[0];

    if($uuid)
    {
        echo '
			{
				"injuries": [
					{
						"uuid": "1",
						"title": "Bleeding head",
						"description": "Head was heavily bleeding.",
						"sulution": "Went to hospital and stitched my wound."
					},
					{
						"uuid": "2",
						"title": "Bleeding head",
						"description": "Head was heavily bleeding.",
						"sulution": "Went to hospital and stitched my wound."
					}
				]
			}
        ';
    }
    else
    {
        echo '{ "success": "false", "message": "Fout." }';
    }
}
?>
