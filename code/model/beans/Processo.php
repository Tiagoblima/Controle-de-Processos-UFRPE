<?php
class Processo{
    //Atributos da classe
    private $num;
    private $data;
    private $assunto;
    private $interessado;

    //Funções get/set
    public function setNumero($novoNumero){
        $this->num = $novoNumero;
    }
    public function getNumero(){
        return $this->num;
    }

    public function setData($novaData){
        $this->data = $novaData;
    }
    public function getData(){
        return $this->data;
    }

    public function setAssunto($novoAssunto){
        $this->assunto = $novoAssunto;
    }
    public function getAssunto(){
        return $this->assunto;
    }

    public function setInicio($novoInicio){
        $this->interessado = $novoInicio;
    }
    public function getInicio(){
        return $this->interessado;
    }
}