<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="content/css/roboto.min.css" rel="stylesheet">
    <link href="content/css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="content/css/style.css" />
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script src="content/js/master.js"></script>
</head>

<body>
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">

                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Fysiofitcare Portal</a>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#" class="">Dashboard</a></li>

                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">App inhoud <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="app-inhoud.php">Wijzigen</a></li>
                                </ul>
                            </li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Toevoegen <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="club-toevoegen.php">Clubs</a></li>
                                </ul>
                            </li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chat<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="chat.php">Nieuw</a></li>
                                    <li><a href="#">Gelezen</a></li>
                                    <li><a href="#">Archief</a></li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <div class="togglebutton">
                                    <br>
                                    <label>
                                        <input type="checkbox" checked=""><span class="toggle"></span>Online
                                    </label>
                                </div>
                            </li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ingelogd  <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="therapists.php">Mijn Profiel</a></li>
                                    <li><a href="login.php">Uitloggen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
