<?php
require_once ('../../controllers/UserController.php');
AddUser();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Cadastrar Usuários</title>


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript" ></script>
    <script type="text/javascript" ></script>


    <!-- CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div>
    <?php include 'fragments/session_nav.html' ?>

</div>

  <div class="container">
        <br/>
        <h2 class="big_title">Cadastrar Usuários</h2>

        <br/>
        <br/>

        <form method="post" class="form container">
            <label for="cNome">Nome Completo</label>
            <input type="text" id="cNome" name="tNome"  size="20" max-length="80" class="form-control input-sm" autofocus="autofocus"  />

            <fieldset id="typeUser" display: inline-block> Tipo de Usuário: &nbsp;&nbsp;&nbsp;&nbsp;
                <label class="radio"><input type="radio" id="cUserD" name="tUser"  value="Diretor"> <span>Diretor(a)</span></label>
               <label class="radio"><input type="radio" id="cUserS" name="tUser"  value="Secretario"> <span>Secretario(a)</span></label>
               <label class="radio"><input type="radio" id="cUserP" name="tUser"  value="Professor"> <span>Professor(a)</span></label>
            </fieldset>
            <label for="cEmail">E-mail</label>
            <input type="email" id="cEmail" name="tEmail"  size="30" max-length="30" class="form-control input-sm" autofocus="autofocus" />
            <label for="cSenha">Senha</label>
            <input type="password" id="cSenha" name="tSenha"  size="20" max-length="20" class="form-control input-sm" autofocus="autofocus"/>
            <label for="cConfSenha">Confirmação da Senha</label>
            <input type="password" id="cConfSenha" name="tConfSenha"  size="20" max-length="20" class="form-control input-sm" autofocus="autofocus"/>  </br></br>
            <div class="row btn_form form-group">

                <button class="waves-effect waves-light btn" type="submit">Cadastrar</button>

            </div>
        </form>

   </div>
</body>

   <div>
       <?php include 'fragments/footer.html'; ?>
   </div>