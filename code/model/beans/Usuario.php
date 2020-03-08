<?php
class Usuario{
    //Atributos da classe
    private $nomeCompleto;
    private $tipoUsuario;
    private $email;
    private $login;
    private $senha;

    //Funções get/set
    public function setNome($novoNome){
        $this->nomeCompleto = $novoNome;
    }
    public function getNome(){
        return $this->nomeCompleto;
    }

    public function setTipo($novoTipo){
        $this->tipoUsuario = $novoTipo;
    }
    public function getTipo(){
        return $this->tipoUsuario;
    }

    public function setEmail($novoEmail){
        $this->email = $novoEmail;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setLogin($novoLogin){
        $this->login = $novoLogin;
    }
    public function getLogin(){
        return $this->login;
    }

    public function setSenha($novaSenha){
        $this->senha = $novaSenha;
    }
    public function getSenha(){
        return $this->senha;
    }
}