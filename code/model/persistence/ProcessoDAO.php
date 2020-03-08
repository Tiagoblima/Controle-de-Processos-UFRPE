<?php
require_once ('DataBase.php');

function save($table = NULL, $processo = NULL){
    $dataBase = openDataBase();

    $columns = null;
    $values = null;

    foreach ($processo as $key => $value){
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }

    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');


    $sql = "INSERT INTO " . $table . " ($columns)" . " VALUES " . "($values);";
    try{
        $dataBase->query($sql);
        echo '<div class="alert alert-primary" role="alert">Processo recebido com sucesso!</div>';
        echo "<script>alert('Email enviado com Sucesso!);</script>";
    }catch (Exception $e){

        echo '<div class="alert alert-danger" role="alert">Processo não recebido! Falha ao salvar no banco!!</div>';
    }

    closeDataBase($dataBase);
}

function findProcess($columns, $table){
    $dataBase = openDataBase();
    $found = NULL;

    try {
        $sql = "SELECT ". $columns ." FROM " . $table;
        $result = $dataBase->query($sql);

        if($result->num_rows > 0){
            $found = $result->fetch_all(MYSQLI_ASSOC);
        }
    } catch (Exception $e) {
        echo "Falha ao buscar os processos no banco";
    }

    closeDataBase($dataBase);
    return $found;
}
function consultProcess($process){
    $dataBase = openDataBase();
    $num = $process['numero_processo'];

  //  $consult_process = "SELECT id_processo FROM Processo WHERE numero_processo='$num' LIMIT 1";
   // $resultado = mysqli_query($dataBase, $consult_process);

    closeDataBase($dataBase);
    //return $resultado;
}
