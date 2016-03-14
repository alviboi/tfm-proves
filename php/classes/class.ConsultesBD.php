<?php 
include_once 'class.database.php';

class ConsultesBD{
		public $link;
		function __construct(){ //Construct s'executa només es crea l'objecte
			$db_connection = new dbConnection();
			$this->link = $db_connection->connect();
			return $this->link;
		}
		
		function InsertaEstudiant($DNI, $Nom, $Cognoms, $Adreça, $CP, $Població, $Sexe, $DataNaixement, $País, $Nacionalitat, $LocalitatNaixement, $ProvínciaNaixement, $Email, $Telèfon){
			
		}
		
		function InsertaCurs(){
				
		}
		
		function ConsultaEstudiant($DNI){ //, $Cognoms, $Nom
		
			$sql1 = 
			$query = $this->link->prepare("SELECT * FROM Estudiant WHERE dni=?");
			$values = array ($DNI);
			$query->execute($values);
			$result = $query -> fetchAll();
			return json_encode($result);
			
		}
		
		function ConsultaLlistatCurs($Programa, $Torn){
			
			
		}
		
		function CarregaFoto ($foto, $DNI){
			
			list(, $foto) = explode(',', $foto); //La manera que te el SO d'entendre qe es una imatge
			mkdir($_SERVER['DOCUMENT_ROOT'] . "/fotos_alumnes");
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/fotos_alumnes/".$DNI.'.jpg', base64_decode($foto));
			die;
		}
		
				
}	

?>