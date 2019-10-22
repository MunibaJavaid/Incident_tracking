<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
		<link rel="stylesheet" href="css/style3.css">
	<style>
		input, textarea, button {
  font-family: "Poppins-Regular";
  color: #333;
  font-size: 13px; }

  label{
  	font-family: Poppins;
  	font-size: 15px;
  	font-weight: bold;
  }
  button {
  border: 0px solid;
  width: 164px;
  height: 51px;
  margin: auto;
  margin-top: 40px;
  background-color:  #333;
  font-size: 15px;
  color: #fff;
  border-radius: 40px;

 }
 h3{
 	text-transform: uppercase;
    font-size: 25px;
    font-family: "Poppins";
    text-align: center;
    margin-bottom: 28px;
    font-weight: bold;
 }
	</style>
	</head>
	<body>
		<div class="container-fluid" style="background-image: url('12.jpg'); min-height: 100vh;">
			
			<div class="row justify-content-center">
				
				<section class="col-12 col-sm-6 col-md-3">
						<form method="post" action="login.php" class="form-container">
					 	<?php include('errors.php'); ?>
					 	<h3>ACCOUNT LOGIN</h3>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-block" name="login_user">Login</button><br>
						  <center><p>Dont have an account? <a href="register.php">Sign up</a></p></center>
					</form>
				</section>
			</div>
		</div>
	</body>
</html>