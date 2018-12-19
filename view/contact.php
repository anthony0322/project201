<?php include '../assets/include/navbar.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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
<body>
	
	<div class="col-lg-12" align="center">
		<div class="form-div">
		<form>
			
				<div class="form-group" align="left">
				    <label>Name</label>
				    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your name">
				  </div>
				  <div class="form-group" align="left">
				    <label>Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  </div>
				  <div class="form-group" align="left">
				    <label for="exampleInputPassword1">Message</label>
				    <textarea class="form-control" placeholder="message"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Send</button>
				
		  
		</form>
		</div>
	</div>	

	<div class="col-lg-4">
		
	</div>
<footer style="background: rgba(14,1,36,1); padding-top:50px;">
	<?php 
		include '../assets/include/footer.php';
	 ?>
</footer>


</body>
</html>