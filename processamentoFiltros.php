<?php 
require_once("config.php");
session_set_cookie_params(0);
session_start();




$nome = $_POST["Nome"];
$oceano = $_POST["Oceano"];
$agua = $_POST["Agua"];
$tamanho = $_POST["Tamanho"];
$continente = $_POST["Continente"];
$comportamento = $_POST["Comportamento"];


$_SESSION["nome"] = $nome;
$_SESSION["oceano"] = $oceano;
$_SESSION["agua"] = $agua;
$_SESSION["tamanho"] = $tamanho;
$_SESSION["continente"] = $continente;
$_SESSION["comportamento"] = $comportamento;








header("Location:home.php#service");




?>