<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
try
{
	$bd = new PDO('mysql:host=localhost;dbname=bdd01_2017', 'root', '');
	return $bd;
}
catch (PDOException $e)
{
	// On termine le script en affichant le code de l’erreur ainsi que le message
	die('<p> La connexion a échoué. Erreur['.$e->getCode().'] : '.$e->getMessage().'</p>');
}
?>