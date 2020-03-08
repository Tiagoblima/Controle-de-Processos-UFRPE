<?php
require_once ('../../controllers/ProcessoController.php');
AddProcessos();
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Home</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--- dataTable ---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

<div >
    <?php include "fragments/session_nav.html"; ?>

</div>


<div class="container">


    <br/>
    <h2 class="big_title">Receber Processos</h2>

    <br/>
    <br/>

    <div class="center-align">


        <form action="form_process.php" class="form" method="post" >

            <div class="row">

                <div class="form-group col">
                    <label for="num_processo">Número do Processo</label>
                    <input id="num_processo" name="num" type="number" class="form-control input-sm" autofocus="autofocus" maxlength="50"/>
                </div>

                <div class="form-group col">
                    <label for="assunto">Assunto</label>
                    <input id="assunto" name="assunto" type="text" class="textfield" autofocus="autofocus" maxlength="50"/>
                </div>

                <div class="form-group col">
                    <label for="assunto">Interessado</label>
                    <input id="assunto" name="interessado" type="text" class="form-control input-sm" autofocus="autofocus"  maxlength="50"/>
                </div>


                <div class="form-group col-3">
                    <label for="date">
                        Data de Recebimento
                    </label>
                    <input type="text" id="date" name="data" class="datepicker">
                </div>


                <div class="row btn_form form-group col-10">
                    <button  class="waves-effect waves-light btn" type="submit">Receber</button>
                    <button class="waves-effect waves-light btn" type="submit">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'fragments/footer.html' ?>
<script rel="script" src="js/materialize.js"></script>
<script rel="script" src="js/materialize.min.js"></script>
<script rel="script" src="js/form.js"></script>

</body>
</html>