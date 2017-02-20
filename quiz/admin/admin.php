<?php
	include '../includes/config.php';
	if(isset($_SESSION['uname'])){
		header('location:dashboard.php');
	}
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pass = $_POST['upass'];

		$SQL = mysql_query("SELECT uname , pass FROM admin WHERE uname='$uname' AND pass='$pass'");
		  $row = mysql_fetch_array($SQL);
		  $row_cnt = mysql_num_rows($SQL);
		  if( $row_cnt == 1){
		  		$_SESSION['uname'] = $uname;
		  		header("location:dashboard.php");		
		  }else{
		  	$error = "Please Check your email id and password";
		  }

	}
?>
<body>
	<?php include 'includes/header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
				<?php if(isset($error)){ echo "<div class='alert alert-danger'><h5>".$error."</h5></div>"; }?>
				<div class="panel panel-success">
				<div class="panel-heading">Login</div>
					<div class="panel-body">
						<form method="post" action="#">
							<div class="form-group">
								<input type="email" name="uname" placeholder="Enter username" class="form-control" required>						
							</div>
							<div class="form-group">
								<input type="password" name="upass" placeholder="Enter password" class="form-control" required>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Submit" class="btn btn-primary">
							</div>
						</form>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php include 'includes/footer.php';?>
</body>
</html>