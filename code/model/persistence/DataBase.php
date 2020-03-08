<?php
//Credenciais para conexão com o banco de dados.
define('HOST','remotemysql.com');
define('USER','zFG2rQJeB5');
define('PASSWORD','Xspk7HgypO');
define('DATABASE','zFG2rQJeB5');

//Abrindo conexão com o banco de dados.
function openDataBase(){

    try{
        $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
        if (!$conn){

            echo '<div class="alert alert-danger" role="alert">Falha ao conectar com banco de dados!</div>';

        }else{
            return $conn;
        }
    }catch (Exception $exception ){

        echo '<div class="alert alert-danger" role="alert">Falha ao conectar com banco de dados. Atualize a página.!</div>';

    }

}
//Fechando conexão com o banco de dados.
function closeDataBase($conn){
    mysqli_close($conn);
}
