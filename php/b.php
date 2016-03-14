<?php
	$foto = $_POST['base64'];
	$data = $_POST['base64'];
	include_once 'classes/class.ConsultesBD.php';
	$Consulta = new ConsultesBD();
	echo 'entre';
	$Consulta->CarregaFoto($foto,'73567572W');
	
	
?>