<?php
require_once ('../../model/beans/Usuario.php');
require_once ('../../model/beans/Departamento.php');
require_once ('../../model/persistence/UserDAO.php');



function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros){
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
  $mi = "abcdefghijklmnopqrstuvyxwz";
  $nu = "0123456789";

  if ($maiusculas){
        $senha = "";
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }

    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }

    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }

    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}

function AddUser (){

  if (!empty($_POST)){

        $user = new Usuario();
        $user->setNome($_POST['tNome']);
        $user->setTipo($_POST['tUser']);
        $user->setEmail($_POST['tEmail']);
        //$user->setLogin($_POST['tEmail']);
        $user->setSenha($_POST['tSenha']);


        $dpt = new Departamento();
        $dpt->setId();

          $arrayM['email']= $user->getEmail();
          $arrayM['id_departamento']= $dpt->getId();
          $arrayM['id_membro_dpt']= uniqid();
          $arrayM['nome']= $user->getNome();

          save('Membro_Departamento', $arrayM);

        if($_POST['tUser'] != 'Professor'){

            $arrayAdm['login']= $user->getEmail();
            $arrayAdm['senha']= $user->getSenha();
            $arrayAdm['tipo'] = $user->getTipo();

            save('Adm_Sistema', $arrayAdm);

        }

        if($_POST['tUser'] == "Diretor" ){

            $arrayD['id_membro_dpt']= $arrayM['id_membro_dpt'];
            $arrayD['login_adm_sistema']= $user->getEmail();
            save('Diretor', $arrayAdm);
          }

        if($_POST['tUser'] == "Secretario" ){

            $arrayS['id_membro_dpt']= $arrayM['id_membro_dpt'];
            $arrayS['login_adm_sistema']= $user->getEmail();
            save('Secretario', $arrayS);
          }

        if($_POST['tUser'] == "Professor"){


          $user->setSenha(gerar_senha(8, true, true, true));
          save('professor', $arrayM);

          }
    }

}


//enviar email com a senha
//AINDA EM DESENVOLVIMENTO
/*function EnviarEmail extends Usuario($novaSenha, $email){

  $from = "masterprogrammingsw@gmail.com";
  $msg="Olá $nomeCompleto, sua senha cadastrada no nosso sistema é: $novaSenha";

  mail($email, "Senha cadastrada", $msg);

}*/
