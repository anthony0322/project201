<?php 

$dsn = "mysql:host=localhost;dbname=project201";
$username = "root";
$pass = "";
try{
$conn = new PDO($dsn,$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($conn->select_db('project201') === false){
	$sql = "CREATE DATABASE project201";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
}
 $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }

 ?>