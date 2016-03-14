<?php 
	include_once 'class.database.php';
	
	class GestionaUsuaris{
		public $link;
		function __construct(){ //Construct s'executa només es crea el objecte
			$db_connection = new dbConnection();
			$this->link = $db_connection->connect();
			return $this->link;
		}
		
		
		
		function registraUsusaris($username,$email,$password,$ip_address,$time,$date){
			$query = $this->link->prepare("INSERT INTO users (username, email, password,ip_address,time,date) VALUES (?,?,?,?,?,?)");
			$values = array ($username,$email,$password,$ip_address,$time,$date);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts;
		}
		function LoginUsuaris($username,$password){
			$query2 = $this->link->query("SELECT * FROM usuaris WHERE usuari = '$username' AND password = '$password'");
			$rowcount2 = $query2->rowCount();
			return $rowcount2;
		}
		function  UsuariInfo($username){
			$query3 = $this->link->query("SELECT * FROM usuaris WHERE usuari ='$username'");
			$a = $query3->rowCount();
			if ($a == 1)
			{
				$result = $query3 -> fetchObject();
				return $result;
			}
			else {
				
				return $a;
			}
		}
		
	}
	//$user = new GestionaUsuaris();
	//echo $user->registraUsusaris('bob', 'bob@gmail.com','bob', '127.0.0.1', '12:00', '29-02-2016');
	//$b = $user->GetUserInfo('admin');
	//print_r($b);
	//echo $b->id;
	?>