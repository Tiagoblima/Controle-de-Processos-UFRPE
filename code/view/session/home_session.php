<!DOCTYPE html>
<html lang="pt-br">

<?php
require_once ('../../controllers/ProcessoController.php');
$json = convertToJson();
saveJson($json, "data/session_process.json");

?>
<?php include 'fragments/head.html' ?>
<?php include 'fragments/session_nav.html' ?>

<body>

<div class="container">

    <br/>
    <h2 class="big_title">Processos</h2>
    <br/>


    <table id="publicProcessTable" class="display">

        <thead>
        <tr>
            <th>No Processo</th>
            <th>Data de Chegada</th>
            <th>Local atual</th>
            <th>Assunto</th>
            <th>Interessado</th>
            <th>Status</th>
            <th  style='width: 10%;'>Ações</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<?php include 'fragments/footer.html' ?>


</body>
<script rel="script" src="js/init.js"></script>
</html>