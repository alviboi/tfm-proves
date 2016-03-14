<!-- 
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
		
	
	</head>
 -->	
	<style>
		

		.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}

		.superior {
		  
		  padding-left: 0px;
		  padding-riht: 10px;
		  
		}
		
		
		.margenes { margin-top:20px; }
		.webcam {
            width: 260px;
            height: 196px;
            position: relative;
            border: 1px solid #d3d3d3;
            float: left;
            top: 2px;
        }
 
        .webcam video {
            width: 100%;
            height: 100%;
            position: absolute;
        }
 
        .webcam .photoArea {
            border: 2px dashed red;
            width: 140px;
            height: 190px;
            position: relative;
            margin: 0 auto;
            
        }
 
        canvas, img {
            float: left;
        }
 
        .controls {
            clear: both;
        }
		
		
	
		
	</style>
	<script>
		$(function () {
			$("#DataNaixement").datepicker({
			      changeMonth: true,
			      changeYear: true,
			      yearRange: '1940:2016'
			    });
			
		});
		$(function($){
		    $.datepicker.regional['ca'] = {
		        closeText: 'Tancar',
		        prevText: '<Ant',
		        nextText: 'Seg>',
		        currentText: 'Avui',
		        monthNames: ['Gener', 'Febrer', 'Març', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Setembre', 'Octubre', 'Novembre', 'Desembre'],
		        monthNamesShort: ['Gen','Febr','Març','Abr', 'Maig','Juny','Jul','Ag','Set', 'Oct','Nov','Des'],
		        dayNames: ['Diumenge', 'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 'Divendres', 'Dissabte'],
		        dayNamesShort: ['Diu','Dil','Dim','Dix','Dij','Div','Dis'],
		        dayNamesMin: ['Dg','Dl','Dt','Dc','Dj','Dv','Ds'],
		        weekHeader: 'Sm',
		        dateFormat: 'dd/mm/yy',
		        firstDay: 1,
		        isRTL: false,
		        showMonthAfterYear: false,
		        yearSuffix: ''
		    };
		    $.datepicker.setDefaults($.datepicker.regional['ca']);
		});
    </script>
	



<div class="container">
<div id="dialog" title="Pren foto" style="display:none;">
    <div class="webcam">
        <video autoplay id="video"></video>
        <div class="photoArea"></div>
        
    </div>
    </div>
 <canvas id="canvas" width='140' height='190' hidden style="border: 1px solid #d3d3d3;"></canvas>


<form method="post" action="matricula.php">

<div class="col-lg-12 superior">

	<div class="col-lg-11 superior">

	<div class="row text-left block-left">

	<fieldset class="form-group col-lg-3">
		<label for="Nom">Nom</label>
		<input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-3">
		<label for="Cognoms">Cognoms</label>
		<input type="text" class="form-control" id="Cognoms" name="Cognoms" placeholder="Cognoms" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-3">
		<label for="Adreça">Adreça</label>
		<input type="text" class="form-control" id="Direccio" name="Direccio" placeholder="Adreça" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-2">
		<label for="Pablacio">Població</label>
		<input type="text" class="form-control" id="Poblacio" name="poblacio" placeholder="Població" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-1">
		<label for="CodiPostal">CP</label>
		<input type="date" class="form-control" id="CP" name="CP" placeholder="Codi Postal" required="required">
	</fieldset>
	
</div>

<div class="row">

	<fieldset class="form-group col-lg-2">
		<label for="DNI">DNI</label>
		<input type="text" class="form-control" id="DNI" name="dni" placeholder="DNI, NIE o Pasaport" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-2">
		<label for="Tlf">Telèfon de contacte</label>
		<input type="text" class="form-control" id="Telefon" name="Telefon" placeholder="Telèfon de contacte" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-2">
		<label for="Sexe">Sexe</label>
			<select class="form-control" id="Sexe" name="sexe">
				<option>Home</option>
				<option>Dona</option>
			</select>
	</fieldset>
	
	<fieldset class="form-group col-lg-3">
		<label for="Correu electrònic">Correu electrònic</label>
		<input type="email" class="form-control" id="Email" name="Email" placeholder="Correu electrònic">
	</fieldset>
	
	<fieldset class="form-group col-lg-3">
		<label for="Nacionalitat">Nacionalitat</label>
		<input type="text" class="form-control" id="Nacionalitat" name="Nacionalitat" placeholder="Nacionalitat">
	</fieldset>
			
</div>

</div>

<div class="col-lg-1">

   
    <img onclick="obrir_dialog()" id="foto" width="100" height="150" style="border: 2px solid gray; text-align: center; color:red;" value="Imatge" alt="Polsa per a prendre imatge"/>
    

</div>

</div>





<div class="row">

	<fieldset class="form-group col-lg-3">
		<label for="DataNaixement">Data de naixement</label>
		<input type="text" class="form-control" id="DataNaixement" name="DataNaixement" placeholder="Data de Naixement" required="required">
	</fieldset>

	<fieldset class="form-group col-lg-3">
		<label for="LocalitatNaixement">Localitat de naixement</label>
		<input type="text" class="form-control" id="LocalitatNaixement" name="LocalitatNaixement" placeholder="Localitat de Naixement" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-3">
		<label for="Província de naixement">Província de naixement</label>
		<input type="text" class="form-control" id="ProvinciaNaixement" name="ProvinciaNaixement" placeholder="Provincia de Naixement" required="required">
	</fieldset>
	
	<fieldset class="form-group col-lg-3">
		<label for="País de naixement">País de naixement</label>
		<input type="text" class="form-control" id="PaisNaixement" name="PaisNaixement" placeholder="País de naixement" required="required">
	</fieldset>


</div>


<div class="row">

				<fieldset class="form-group col-lg-3">
					<label for="ProgramaACicleId">Programa A Cicle I:</label>
				    <select multiple class="form-control" name="programaAcicleI" id="ProgramaACicleId">
				      	<option value="Alfa mati">ALFA matí</option>
						<option value="Base mati">BASE matí</option>
						<option value="Base vesprada">BASE vesprada</option>
						<option value="Taller 13 mati">TALLER 1.3 matí</option>
						<option value="No"></option>
				    </select>
			  	</fieldset>
			  	<fieldset class="form-group col-lg-3">
				    <label for="ProgramaBCicleIId">Programa B Cicle II:</label>
				    <select multiple class="form-control" name="programaBcicleII" id="ProgramaBCicleIId">
				     	<option value="GES 2.1 mati">GES 2.1 matí</option>
						<option value="GES 2.1 vesprada">GES 2.1 vesprada</option>
						<option value="GES 2.2 mati">GES 2.2 matí</option>
						<option value="GES 2.2 vesprada">GES 2.2 vesprada</option>
						<option value="No"></option>
				    </select>
			  	</fieldset>
			  	<fieldset class="form-group col-lg-3">
				    <label for="Optativa1d">Optativa 1 (TOTS):</label>
				    <select multiple class="form-control" name="Optativa1" id="Optativa1d">
				     	<option value="INF">INF</option>
						<option value="OIP">OIP (Sols 2.1)</option>
						<option value="TMI">TMI (Sols 2.1)</option>
						<option value="GH">GH (Sols 2.2)</option>
						<option value="No"></option>
				    </select>
			  	</fieldset>
			  	<fieldset class="form-group col-lg-3">
				    <label for="Optativa2d">Optativa 2 (Només GES2.1):</label>
				    <select multiple class="form-control" name="Optativa2" id="Optativa2d">
				     	<option value="INF">INF</option>
						<option value="OIP">OIP (Sols 2.1)</option>
						<option value="TMI">TMI (Sols 2.1)</option>
						<option value="GH">GH (Sols 2.2)</option>
						<option value="No"></option>
				    </select>
			  	</fieldset>


</div>

<div class="row">

				<fieldset class="form-group col-lg-3">
				    <label for="ProgramaCValenciaJQCVd">Programa C Valencià JQCV:</label>
				    <select multiple class="form-control" name="programaCvalencia" id="ProgramaCValenciaJQCVd">
						<option value="ORAL mati">ORAL matí</option>
						<option value="ELEMENTAL nit">ELEMENTAL nit</option>
						<option value="MITJA mati">MITJÀ matí</option>
						<option value="MITJA nit">MITJÀ nit</option>
						<option value="SUPERIOR nit">SUPERIOR nit</option>
						<option value="No"></option>
				    </select>
			  	</fieldset>
			  	<fieldset class="form-group col-lg-3">
				    <label for="ProgramaBDCursosPolivalentsd">Programa B-D Cursos polivalents:</label>
				    <select multiple class="form-control" name="CursosPolivalents" id="ProgramaBDCursosPolivalentsd">
				      	<option value="Accés Unviversitat matí">Accés Universitat matí</option>
						<option value="Accés Unviversitat nit">Accés Universitat nit</option>
						<option value="Accés CFGS mati">Accés CFGS matí</option>
						<option value="Accés CFGS nit">Accés CFGS nit</option>
						<option value="No"></option>
				    </select>
			  	</fieldset>
			  	<fieldset class="form-group col-lg-3">
				    <label for="ProgramaJAnglesBasicd">Programa J Anglès Bàsic:</label>
				    <select multiple class="form-control" name="ProgramaJang" id="ProgramaJAnglesBasicd">
				      	<option value="Taller anglès nit">Taller angles nit</option>
						<option value="Certificat A1 Anglès nit">Certificat A1 Anglès nit</option>
						<option value="Certificat A2 Anglès matí">Certificat A2 Anglès matí</option>
						<option value="Certificat B1 Anglès nit">Certificat B1 Anglès nit</option>
						<option value="No"></option>
				    </select>
			 	</fieldset>
</div>

<div class="row">
				<div class="checkbox text-center">
				    <label>
				      <input type="checkbox" name="valida"> Valida l'alumne
				    </label>
 			 	</div>	
</div>

<div class="row text-center">
				
				    <button class="btn btn-primary btn-success" type="submit" name="desa" id="Desa">Desa</button>
				    <button class="btn btn-primary btn-danger" type="submit" name="esborra" id="esborra">Esborra</button>
 			 		
</div>

 </form>
 </div>
<script src="js/webcam.js"></script>
    
