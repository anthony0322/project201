<?php 
if(isset($_POST['send'])){
	insertMessage($_POST['senderName'],$_POST['senderEmail'],$_POST['senderMessage']);
}
function insertMessage($name, $email, $message){
include '../database/connection.php';

$query = "INSERT INTO tblname (name, email, message) VALUES :name, :email, :message";
$data =[
	'name'=>$name,
	'email'=>$email,
	'message'=>$message
];
$statement = $conn->prepare($sql);
if($statement->execute($data)){
	header("location: ../view/contact.php?msg=Message sent!");
}

}

function getMessage(&$messages){
include '../database/connection.php';

$query = "SELECT * FROM tblname";
$statement = $conn->prepare($sql);
$statement->execute();
$messages = $statement->fetchAll();

}




 ?>