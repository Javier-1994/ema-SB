<?php

if(!empty($_POST)){
	$found = AssistanceData::getByPD($_POST["idalumno"],$_POST["fecha"]);
	if($found==null && $_POST["tipo"]!=""){
	$assis = new AssistanceData();
	$assis->person_id = $_POST["idalumno"];
	$assis->kind_id = $_POST["tipo"];
	$assis->date_at = $_POST["fecha"];
	//$assis->idmaestro = $_SESSION["name"];
	$assis->add();
	}else if($found=!null&&$_POST["tipo"]!=""){
	$found = AssistanceData::getByPD($_POST["idalumno"],$_POST["fecha"]);
	
	$found->kind_id = $_POST["tipo"];
	$found->update();

	}else if($_POST["tipo"]==""){
	$found = AssistanceData::getByPD($_POST["idalumno"],$_POST["fecha"]);
		$found->del();
	}
}

?>