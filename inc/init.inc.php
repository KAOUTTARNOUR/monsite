<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//--------- BDD
$mysqli = new mysqli("localhost", "root", "", "site");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
    $mysqli->set_charset("ISO-8859-1");
 
//--------- SESSION
session_start();

//--------- CHEMIN
define("RACINE_SITE","/sitephp/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");