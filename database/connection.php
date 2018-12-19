<?php 

$dsn = "mysql:host=localhost";
$username = "root";
$pass = "";
$conn = new PDO($dsn,$username,$pass);

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


        try{
$conn = new PDO("mysql:host=localhost;dbname=project201",$username,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}

catch(PDOException $e)
    {

        echo "Connection failed: " . $e->getMessage();
        

    }
    

