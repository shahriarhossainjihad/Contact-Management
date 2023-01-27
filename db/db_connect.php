<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'contacts';

$conn = new mysqli($hostname,$username,$password,$dbname);

if(!$conn){
	die('Database Not Connected');
}

	// class dbconnect{
	// 	private $conn;
	// 	function __construct()
	// 	{
	//     #database host, database user, database pass, database name
	//     $dbhost = 'localhost';
	//     $dbuser = 'root';
	//     $dbpass = "";
	//     $dbname = 'contact';

	//     $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	    
	//     if(!$this->conn){
	//         die("Database Connection Error!!");
	//     }
	// 	}
	// }



?>