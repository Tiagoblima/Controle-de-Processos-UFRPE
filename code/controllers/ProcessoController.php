<?php
require_once ('../../model/persistence/ProcessoDAO.php');
require_once ('../../business/ProcessoBusiness.php');
require_once ('../../model/beans/Processo.php');
openDataBase();
$process = NULL;

function index (){
	global $process;
	$process = findAllProcess('Processo');
}
function converterDataForDataBase($data){
	$newData = implode('-', array_reverse(explode('/', $data)));
	return $newData;
}
function converterDataForTable($data){
	$newData = implode('/', array_reverse(explode('-', $data)));
	return $newData;
}
function AddProcessos (){
    if (!empty($_POST)){
        $processo = new Processo();
        $processo->setNumero($_POST['num']);
        if (!empty($_POST['data'])){
        	$processo->setData(converterDataForDataBase($_POST['data']));
        }
        $processo->setAssunto($_POST['assunto']);
        $processo->setInicio($_POST['interessado']);

        $arrayProcesso['assunto'] = $processo->getAssunto();
        $arrayProcesso['data_cadastro'] = $processo->getData();
        $arrayProcesso['id_processo'] = hexdec(uniqid());
        $arrayProcesso['local_atual'] ="Departamento";
        $arrayProcesso['no_dpt'] = 1;
        $arrayProcesso['numero_processo'] = $processo->getNumero();
        $arrayProcesso['solicitante'] = $processo->getInicio();
        $arrayProcesso['status_atual'] = 0;


        
        validarProcesso('Processo', $arrayProcesso);
    }
}

function findAllProcess ($table){

	return findProcess("id_processo, numero_processo, assunto, solicitante, interessado, data_cadastro, local, condicao, no_dpt", $table);

}

/**
 * @return false|string
 */
function convertToJson(){

    $db = openDataBase();

   $stmt = $db->prepare("SELECT * FROM Processo");

    try{
        $stmt->execute();
        $resultSet = $stmt->get_result();

        $processes = $resultSet->fetch_all();
    }catch (Exception $exception){
        echo "Erro ao carregar os dados!";
    }


    closeDataBase($db);

    $processes = json_encode($processes);
    $head = '"name": "publicProcessTable","version": "1.0.0","dependencies": {}, "draw": 1,"recordsTotal": 57,"recordsFiltered": 57,';
    return '{'.$head.'"data":'.$processes.'}';


}

function saveJson($json_data, $path){

    $file = fopen($path, 'w');

    fwrite($file , $json_data);
    fclose($file);
}