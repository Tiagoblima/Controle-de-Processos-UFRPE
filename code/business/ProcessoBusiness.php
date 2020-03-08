<?php
require_once ('../../model/persistence/ProcessoDAO.php');

function validarNumeroProcesso($process){
	$resultado = consultProcess($process);

	if (($resultado) AND ($resultado->num_rows != 0)) {
		return false;
	}else{
		return true;
	}
}
function validarProcesso ($table, $process){
	if (validarNumeroProcesso($process)) {
		save($table, $process);
	}else{echo "Processo já recebido no Departamento!";}
}

?>