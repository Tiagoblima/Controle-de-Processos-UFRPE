<!DOCTYPE html>

<?php
require_once ('../../controllers/ProcessoController.php');
$json = convertToJson();
saveJson($json, "data/public_process.json");

?>
<html lang="pt-br">
<?php include 'fragments/head.html' ?>
<body>

<?php include 'fragments/public_nav.html' ?>



<div class="container">
    <h3>Processos</h3>
    <table id="publicProcessTable" class="display">

        <thead>
        <tr>
            <th>No Processo</th>
            <th>Assunto</th>
            <th>Interessado</th>
            <th>Data de Chegada</th>
            <th>Local atual</th>
            <th>Situação</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<?php include 'fragments/footer.html' ?>
</body>
</html>
