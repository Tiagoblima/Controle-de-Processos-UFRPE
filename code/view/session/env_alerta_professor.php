<!DOCTYPE html>
<html lang="pt-br">

    <?php include 'fragments/head.html' ?>
<body>

<div>
    <?php include 'fragments/session_nav.html' ?>
    <?php include 'fragments/base_nav.html' ?>

</div>

  <div class="container" id ="encmProcess">
        <br/>
        <h2 class="big_title">Enviar Alerta ao professor</h2>

        <br/>
        <br/>

        <form method="post" >
           
          <p> Selecione o processo:</p><input type="text" id="Process" name="numProcess" placeholder="Digite o número do processo" />
		      
          <p> Processo não cadastrado?<a href="form_process.php"> </t>Cadastrar Processo</a></p></br>
     		  <p> Data de envio do alerta:<input type="text" value="<?=date('d/m/Y')?>">
     	    <p> Mensagem descritiva(opcional):<textarea name="tMsg" id="cMsg"  value="mensagem"  > </textarea></p>
	
          <button class="waves-effect waves-light btn" type="submit">Enviar o Alerta</button>       
        </form>

   </div>

<div>
    <?php include 'fragments/footer.html'; ?>
</div>

</body>

