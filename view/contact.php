<?php include '../assets/include/navbar.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/footer-css.css">
	<!-- <link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap.css'> -->
	<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font-second.css'>
	<link rel='stylesheet' type='text/css' href='../assets/css/custom.css'>
	<!-- <link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap3.3.1.css'> -->
	
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrap-bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<body>
	
	<div class="col-lg-12" align="center">
		<?php 
		if(isset($_GET['msg'])){
			echo "<br><p class='alert alert-success'>".$_GET['msg']."</p>";
		} ?>
		<div class="form-div">
		<form method="POST" action="../controller/contactController.php">
			
				<div class="form-group" align="left">
				    <label>Name</label>
				    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your name" name="senderName" required>
				  </div>
				  <div class="form-group" align="left">
				    <label>Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="senderEmail" required>
				  </div>
				  <div class="form-group" align="left">
				    <label for="exampleInputPassword1">Message</label>
				    <textarea class="form-control" placeholder="message" name="senderMessage"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary" name="send">Send</button>
				
		  
		</form>
		</div>
	</div>	
<footer>
	<div class = "col-md-12 footer-contact">
	<?php include '../assets/include/footer.php'; ?>	
	</div>
</footer>


</body>
</html>