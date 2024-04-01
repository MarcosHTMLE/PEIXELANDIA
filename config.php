<?php

spl_autoload_register(function($nomeClasse){

    $pasta = "assets" . DIRECTORY_SEPARATOR . "classes";
    $caminho = $pasta . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

    if(file_exists($caminho)){
        require_once($caminho);

    }




});





?>