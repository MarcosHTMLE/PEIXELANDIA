<?php


class Filtro{

    private $nome;
    private $oceano;
    private $agua;
    private $tamanho;
    private $continente;
    private $comportamento;


    public function getNome(){
        return $this->nome;
    }
    public function setNome($nomee){
        $this->nome = $nomee;
    }

    public function getOceano(){
        return $this->oceano;
    }
    public function setOceano($oceano){
        $this->oceano = $oceano;
    }

    public function getAgua(){
        return $this->agua;
    }
    public function setAgua($agua){
        $this->agua = $agua;
    }

    public function getTamanho(){
        return $this->tamanho;
    }
    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }

    public function getContinente(){
        return $this->continente;
    }
    public function setContinente($continente){
        $this->continente = $continente;
    }

    public function getComportamento(){
        return $this->comportamento;
    }
    public function setComportamento($comportamento){
        $this->comportamento = $comportamento;
    }






}



       


?>
