<!DOCTYPE html>
<html lang="pt-br">

    <?php include 'fragments/head.html' ?>
<body>

<div>

</div>

  <div class="container" id ="encmProcess">
        <br/>
        <h2 class="big_title">Enviar Alerta ao professor</h2>

        <br/>
        <br/>

        <form method="post" >

            <p> Selecione professor(a):</p><input type="text" id="Prof" name="nomeProf" placeholder="Digite o nome completo do professor" />

            <p> Professor nao cadastrado?<a href="professor_form.php"> </t>Cadastrar Professor</a></p></br>
     		  <p> Data de envio do alerta:   <input type="text" id="date" class="datepicker">
     	    <p> Mensagem descritiva(opcional):<textarea name="tMsg" id="cMsg"  value="mensagem"  > </textarea></p>
	
          <button class="waves-effect waves-light btn" type="submit">Enviar o Alerta</button>       
        </form>

   </div>

<div>

</div>
<script rel="script" src="js/materialize.js"></script>
<script rel="script" src="js/materialize.min.js"></script>
<script rel="script" src="js/form.js"></script>

</body>

