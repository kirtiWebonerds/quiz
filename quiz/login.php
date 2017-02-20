<?php
	include 'includes/config.php';
	if(isset($_SESSION['email'])){
		header("location:dashboard.php");
	}
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$SQL = mysql_query("SELECT email,password,status FROM participant WHERE email='$email' AND password = '$pass'");
		  $row = mysql_fetch_array($SQL);
		  $status = $row['status'];
		  $row_cnt = mysql_num_rows($SQL);
		  if( $row_cnt == 1){
		  		$_SESSION['email'] = $email; 
		  		header("location:dashboard.php");
		  				  	
		  }else{
		  	$error = "Please Check your email id and password";
		  }
	}
?>
<head>
	<link rel="stylesheet" href="css/custom.css" type="text/css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="row">
			<!--<div class="col-md-8">
				<h1>Rules</h1>
				<ul>
								<li>The test contains 5 questions and there is no time limit.</li>
								<li>The test is not official,it's just a nice way to see how much you know, or don't know about Languages.</li>
							</ul>
							
			</div>-->
			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
				<?php if(isset($error)){ echo "<div class='alert alert-danger'><h5>".$error."</h5></div>"; }?>
				<div class="form-group pull-right">
					<a class="btn btn-warning btn-custom-warning btn-sm" href="register.php">Register</a>	
				</div>	
				<div class="panel panel-success">	
				<div class="panel-heading">Login</div>
					<div class="panel-body">
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Enter email address" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Enter Password" name="pass" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" name="submit" value="Login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>