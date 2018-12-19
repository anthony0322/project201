<?php 

$dsn = "mysql:host=localhost;dbname=project201";
$username = "root";
$pass = "";
try{
$conn = new PDO($dsn,$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully"; 	
}
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }

 ?>