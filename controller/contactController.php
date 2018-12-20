<?php 

if(isset($_POST['send'])){
	insertMessage($_POST['senderName'],$_POST['senderEmail'],$_POST['senderMessage']);
}

if (isset($_GET['delete'])) {
	deleteMessage($_GET['id']);
}


function insertMessage($name, $email, $message){
include '../database/connection.php';
$data =[
	'name'=>$name,
	'email'=>$email,
	'message'=>$message
];
$query = "INSERT INTO messages (sender_name, email, message) VALUES (:name, :email, :message)";

$statement = $conn->prepare($query);

if($statement->execute($data)){
	header("location: ../view/contact.php?msg=Message sent!");
}

}

function getMessage(&$messages){
include '../database/connection.php';

$query = "SELECT * FROM messages";
$statement = $conn->prepare($query);
$statement->execute();
$messages = $statement->fetchAll();

}


function deleteMessage($id){
include '../database/connection.php';

$query = "DELETE FROM messages WHERE id=".$id;
$statement = $conn->prepare($query);
$statement->execute();
	header("location: ../view/messages.php");
}





 ?>