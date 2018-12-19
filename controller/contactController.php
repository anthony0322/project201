<?php 

function insertMessage($name, $email, $message){
include '../database/connection.php';

$query = "INSERT INTO tblname (name, email, message) VALUES :name, :email, :message";
$data =[
	'name'=>$name,
	'email'=>$email,
	'message'=>$message
];
$statement = $conn->prepare($sql);
$statement->execute($data);

}

function getMessage(&$messages){
include '../database/connection.php';

$query = "SELECT * FROM tblname";
$statement = $conn->prepare($sql);
$statement->execute();
$messages = $statement->fetchAll();

}




 ?>