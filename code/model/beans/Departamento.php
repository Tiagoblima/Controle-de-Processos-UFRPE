<?php
class Departamento{
    //Atributos da classe
    private $nome;
    private $exigencia;
    private $id;

    //Funções get/set
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setExigencia($novaExigencia){
        $this->exigencia = $novaExigencia;
    }
    public function getExigencia(){
        return $this->exigencia;
    }
    public function setId(){
        $this->id = hexdec(uniqid());
    }
    public function getId(){
        return hexdec(uniqid());
    }
}