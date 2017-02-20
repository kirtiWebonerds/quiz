<?php
	include 'includes/config.php';
		if(isset($_SESSION['email'])){
		header("location:dashboard.php");
	}
	if(isset($_POST['submit'])){
		$sname = $_POST['sname'];
		$semail = $_POST['semail'];
		$scontact = $_POST['scontact'];
		$spassword = $_POST['spassword'];
		$status = 0;
	
		$SQL =mysql_query("INSERT INTO participant(`name`, `email`, `contact`, `password`, `status`) VALUES('$sname','$semail','$scontact','$spassword','$status')");		
		if(!$SQL)
  		{
   			$error =  $conn->error;
  		}else{

  			$success = "Successfully Register Now you can Login <a href='login.php'>Here</a>";
  		} 		
			
	}
	
?>

<body>
	<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
				<?php if(isset($error)){ echo "<div class='alert alert-danger'><h5>".$error."</h5></div>"; }?>
				<?php if(isset($success)){ echo "<div class='alert alert-success'><h5>".$success."</h5></div>"; }?>
				<div class="form-group pull-right">
					<a class="btn btn-warning btn-custom-warning btn-xs" href="login.php">Login</a>	
				</div>				
				<div class="panel panel-success">
					<div class="panel-heading">Register Here</div>
					<div class="panel-body">	
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter fullname" name="sname" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter email id" name="semail" required>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Enter contact number" name="scontact" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Enter Password" name="spassword" required>
							</div>
							<div>
								<input type="submit" name="submit" class="btn btn-primary" value="Register">
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