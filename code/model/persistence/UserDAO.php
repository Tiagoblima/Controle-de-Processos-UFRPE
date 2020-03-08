<?php
require_once ('DataBase.php');

function save($table = NULL, $data = NULL){
    $dataBase = openDataBase();
    $columns = null;
    $values = null;
    foreach ($data as $key => $value){
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');


    $sql = "INSERT INTO " . $table . " ($columns)" . " VALUES " . "($values);";
    try{
        $dataBase->query($sql);
        echo '<div class="alert alert-primary" role="alert">Usuário cadastrado com sucesso! </div>';
    }catch (Exception $e){

        echo '<div class="alert alert-danger" role="alert">Usuário não cadastrado! Falha ao salvar no banco!! </div>';

    }

    closeDataBase($dataBase);
}
