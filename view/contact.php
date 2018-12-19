<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap.css'>
<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font.css'>
<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font-second.css'>
<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap/font-third.css'>
<link rel='stylesheet' type='text/css' href='../assets/css/custom.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
	<?php include '../assets/include/navbar.php'; ?>
	<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Project201</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Message</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your message"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>