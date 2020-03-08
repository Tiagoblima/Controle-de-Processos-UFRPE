<?php
require_once ('../../controllers/DepartamentoController.php');
Cadastra();
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include 'fragments/head.html' ?>

<body>

<div>
    <?php include 'fragments/public_nav.html' ?>
</div>

  <div class="container" >
        <br/>
        <h2 class="big_title">Cadastrar Departamento</h2>

        <br/>
        <br/>

        <form method="post" class="form container">
            <label for="cNome">Nome do Departamento</label>
            <input type="text" name="nomeDpt" id="Dpt" size="20" max-length="80" class="form-control input-sm" autofocus="autofocus"  />
            <label for="cNome">Nome do Diretor(a) do Departamento</label>
            <input type="text" name="nomeDir" id="Dir" size="20" max-length="80" class="form-control input-sm" autofocus="autofocus"  />
            <label for="cNome">Nome do secretário(a) do Departamento</label>
            <input type="text" name="nomeSec" id="Sec" size="20" max-length="80" class="form-control input-sm" autofocus="autofocus"  />
        
        
          <form method="post">

              <div class="input-field col s12">

                 <p>Tempo limite de um processo com o professor dentro do Departamento:</p><br/>
                <select name="tempoLim" id="Lim" class="browser-default">

                  <option value="" disabled selected>Escolha o tempo limite</option>
                  <option value="3">3 dias</option>
                  <option value="5">5 dias</option>
                  <option value="10">10 dias</option>
                  <option value="15">15 dias</option>
                  <option value="20">20 dias</option>
                  <option value="30">1 mês</option>
                  <option value="60">2 meses</option>
                  <option value="90">3 meses</option>
                </select>
               
              </div>
            </form>   

                      <form method="post">

              <div class="input-field col s12">

                 <p>Tempo restante para se tornar crítico:</p><br/>
                <select name="tempoLim" id="Lim" class="browser-default">

                  <option value="" disabled selected>Escolha o tempo</option>
                  <option value="3">3 dias</option>
                  <option value="5">5 dias</option>
                  <option value="10">10 dias</option>
                  <option value="15">15 dias</option>
                  <option value="20">20 dias</option>
                  <option value="30">1 mês</option>
                </select>
               
              </div>
            </form> 


            <form method="post">

              <div class="input-field col s12">

                 <p>Cor do processo em status de atenção:</p>
                <select name="corAten" id="Att" class="browser-default">

                  <option value="" disabled selected>Escolha a cor</option>
                  <option class="card-panel yellow accent-2" value="1">Amarelo</option>
                  <option class="card-panel orange darken-2" value="2">Laranja</option>
                  <option  class="card-panel red darken-1" value="3">Vermelho</option>
                  <option class="card-panel brown lighten-1" value="4">Marrom</option>

                </select>
               
              </div>
            </form>    

                        <form method="post">

              <div class="input-field col s12 ">

                 <p>Cor do processo em status de atrasado:</p>
                  <label for="Att"></label><select name="corAten" id="Att" class="browser-default">

                  <option value="" disabled selected>Escolha a cor</option>
                  <option class="card-panel yellow accent-2" value="1">Amarelo</option>
                  <option class="card-panel orange darken-2" value="2">Laranja</option>
                  <option  class="card-panel red darken-1" value="3">Vermelho</option>
                  <option class="card-panel brown lighten-1" value="4">Marrom</option>

                </select>
               
              </div>
            </form>                       
                   

            <div class="row btn_form form-group">

                <br/><br/><button class="waves-effect waves-light btn" type="submit">Cadastrar</button>
            
            </div>         
        </form>

   </div>   
</body>

   <div>
       <?php include 'fragments/footer.html'; ?>
   </div>


