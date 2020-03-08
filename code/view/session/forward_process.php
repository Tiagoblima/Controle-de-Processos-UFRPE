<!DOCTYPE html>
<html lang="pt-br">

    <?php include 'fragments/head.html' ?>
<body>

<div>

</div>

  <div class="container" id ="encmProcess">
        <br/>
        <h2 class="big_title">Encaminhar Processo</h2>

        <br/>
        <br/>

        <form method="post" >
           
          <p>Selecione o professor:
          <select  name="nomeProf" id="Prof" class="browser-default" >
             <option value="p1">Maria Cristina Andrade</option>
             <option value="p2">Ana Maria Fernades</option>
             <option value="p3">Antonio Felipe Barros</option>
             <option value="p4">Lucia Andrade Silva</option>
             <option value="p5">João Pedro Castro</option>
             <option value="p6">Jonatas Felipe Alves</option>

          </select>
		      
          <p> Professor nao cadastrado?<a href="professor_form.php"> </t>Cadastrar Professor</a></p></br>
     		  <p> Data de encaminhamento: <input type="text" id="date" class="datepicker">
     	    <p> Mensagem descritiva(opcional):<textarea name="tMsg" id="cMsg"  value="mensagem"  > </textarea></p>
	
          <button class="waves-effect waves-light btn" type="submit">Encaminhar</button>       
        </form>

   </div>

<div>

</div>
<script rel="script" src="js/materialize.js"></script>
<script rel="script" src="js/materialize.min.js"></script>
<script rel="script" src="js/form.js"></script>

</body>

