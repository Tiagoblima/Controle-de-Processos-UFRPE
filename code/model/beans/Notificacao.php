<?php
class Notificacao{
    //Atributos da classe
    private $data;
    private $hora;
    private $assunto;
    private $notificante;
    private $notificado;

    //Funções get/set
    public function setData($novaData){
        $this->data = $novaData;
    }
    public function getData(){
        return $this->data;
    }

    public function setHora($novaHora){
        $this->hora = $novaHora;
    }
    public function getHora(){
        return $this->hora;
    }

    public function setAssunto($novoAssunto){
        $this->assunto = $novoAssunto;
    }
    public function getAssunto(){
        return $this->assunto;
    }

    public function setNotificante($novoNotificante){
        $this->notificante = $novoNotificante;
    }
    public function getNotificante(){
        return $this->notificante;
    }

    public function setNotificado($novoNotificado){
        $this->notificado = $novoNotificado;
    }
    public function getNotificado(){
        return $this->notificado;
    }
}