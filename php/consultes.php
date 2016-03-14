<?php 
include_once 'classes/class.ConsultesBD.php';

$user = new ConsultesBD();
$b = $user->ConsultaEstudiant($_POST['dni']);
echo $b;

?>