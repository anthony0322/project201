<?php include '../assets/include/navbar.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/footer-css.css">
		<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font-second.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font-third.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/custom.css'>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrap-bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<br>
					<?php 
					include '../controller/contactController.php';
					getMessage($messages);
						foreach($messages as $message){
							echo "<label class='form-control'>Name:".$message['sender_name']."
							<br>Email:".$message['email']."
							<br>Message:".$message['message']."
							<br>Time sent:".date('M d, l | h:i:s', strtotime($message['time_sent']))."</label>";
						
						}
					 ?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>