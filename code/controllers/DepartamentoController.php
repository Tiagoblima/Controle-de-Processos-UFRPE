<?php
require_once ('../../model/persistence/DepartamentoDAO.php');
require_once ('../../model/beans/Departamento.php');
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
function Cadastra (){
    if (!empty($_POST)){

        $departamento = new Departamento();

        $departamento->setExigencia($_POST['tempoLim']);


        $arrayProcesso['exigencia'] = $departamento->getExigencia();
        $arrayProcesso['id_departamento'] = $departamento->getId();


        validarProcesso('Departamento', $arrayProcesso);
    }
}



/**
 * @return false|string
 */
