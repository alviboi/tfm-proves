<?php
session_start();
 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
 
}
else
{
echo "
" . "Aquesta pàgina està restringida." . "
";
echo "
" . "<a href='login.php'>Entra Ací!</a>";
 
exit;
}
$ara = time();
 
if($ara > $_SESSION['expire'])
{
session_destroy();
echo "
 
" . "La seua sessió ha caducat, <a href='login.php'> Entra altra vegada</a>";
exit;
}
?>

<style>

.fons
{
background: #ddd;;
}
</style>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login Form</title>

	  	<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<script src="js/jquery-1.11.3.js"></script>
  		<script src="js/jquery-ui.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  		<script src="js/webcam.js"></script>
  		<script src="js/ajax.js"></script>
  		
  		
 <script>
$(function () {
	$("#DataNaixement").datepicker({
	      changeMonth: true,
	      changeYear: true,
	      yearRange: '1940:2016'
	    });
}

	//$('#el1').onclick(function(){alert("entra"); return false; });
	
	
		/*
		
	$("#busc").val("Pues si");*/
	
</script>
<script  type="text/javascript">
function esta(){
	$("#busc").attr({
		'placeholder': 'Búsqueda per Cognom' 

});
	document.getElementById("busqueda").innerHTML = "Búsqueda per Cognom ";
	
}

</script>
	
	
		
	</head>



<body class="fons">


<nav class="navbar-default navbar-inverse navbar-fixed-top" >

<div class="row" style="margin-left: 5px; margin-right: 20px">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" class="text-small" class="dropdown-toggle" data-toggle="dropdown" href="#"><small><strong><?php echo $_SESSION['usuari_id'];?> </strong></small><b class="caret"></b></a>
          		<ul class="dropdown-menu">
					<li><a href="php/sesiondestroy.php">Surt</a></li>
				</ul>
        </div>



<div class="navbar-collapse collapse row">

<ul class="nav navbar-nav">
	<li><a href="#">Matriculació</a></li>
	<li><a href="#">Llistats</a></li>
	<li><a href="#">Organitza cursos</a></li>
	<li><a href="#">Exporta arxius</a></li>
	<li><a href="#">Configuració</a></li>
	
</ul>

<form class="navbar-form navbar-right">
	<div class="form-group">
		<input id="busc" type="text" class="form-control col-md-8" placeholder="Búsqueda per DNI" value=""/>
		<button style="margin-left: 2px" class="btn btn-default" type="button" Value="Click" onClick="Datos_DNI(busc.value);"><i class="glyphicon glyphicon-search"></i></button>
	</div>
</form>

<ul class="nav navbar-nav dropdown navbar-right pull-right">
			<li class="dropdown">
				<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><text id="busqueda">Altres búsquedes </text><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="javascript:esta()" onclick="esta()">Búsqueda per Cognom</a></li>
					<li><a href="#">Búsqueda per Nom</a></li>
					<li class="divider"></li>
					<li><a href="#">Búsqueda per DNI</a></li>
				</ul>
			</li>
</ul>
</div>
</div>
</nav>



<div class="row" style="margin-top: 70px;">
<?php 
include_once 'php/matricula.php';
?>
</div>
<script>


</script>

</body>
</html>