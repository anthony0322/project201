<?php 

$dsn = "mysql:host=localhost";
$username = "root";
$pass = "";
$conn = new PDO($dsn,$username,$pass);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($conn->query('use project201') === false){
	$sql = "CREATE DATABASE project201";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }

 // $sql = "CREATE TABLE MyGuests (
 //    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 //    firstname VARCHAR(30) NOT NULL,
 //    lastname VARCHAR(30) NOT NULL,
 //    email VARCHAR(50),
 //    reg_date TIMESTAMP
 //    )";

    // use exec() because no results are returned
    // $conn->exec($sql);
    // echo "Table MyGuests created successfully";
 


$sql = "CREATE DATABASE project201";
    if($conn->exec($sql)){
    echo "Database created successfully";
    $conn = new PDO("mysql:host=localhost;dbname=project201",$username,$pass);

    $sql1 = "CREATE TABLE messages (
    id INT(6) UNSIGNED AUTO_INCREMENT, 
    sender_name VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(255),
    time_sent TIMESTAMP,
    PRIMARY KEY(id)
    )";
    //use exec() because no results are returned
    if($conn->exec($sql1)){
    echo "<br>Table created error";
    }
    else{
    echo "Table created successfully";
    }
    }
    else{
    	echo "Database exist!";
    	try{
$conn = new PDO("mysql:host=localhost;dbname=project201",$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}


catch(PDOException $e)
    {

    	echo "Connection failed: " . $e->getMessage();
    	

    }
    }

//comment
 ?>