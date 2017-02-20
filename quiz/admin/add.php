<?php
	include '../includes/config.php';
	if(!isset($_SESSION['uname'])){
			header("location:admin.php");
	}
	if(isset($_POST['submit'])){
		$category = $_POST['category'];
		$que = $_POST['que'];
		$ch1 = $_POST['ch1'];
		$ch2 = $_POST['ch2'];
		$ch3 = $_POST['ch3'];
		$ch4= $_POST['ch4'];
		$ans = $_POST['answer'];
		$status = 0;
	
		$SQL = mysql_query("INSERT INTO `questions`(`category`,`questions`, `1`, `2`, `3`, `4`, `answer`, `status`) VALUES ('$category','$que','$ch1','$ch2','$ch3','$ch4','$ans','$status')");
		
		
		if(!$SQL)
  		{
   			$error =  $conn->error;
  		}else{

  			$success = "Successfully submitted the Question";
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
				<div class="panel panel-info">
					<div class="panel-heading">Add Questions</div>
					<div class="panel-body">
						<form action="#" method="post">
						<div class="form-group">
								<select name="category" class="form-control">
									<option value="null">-Select Category-</option>
									<?php 
										$cat = mysql_query("SELECT * FROM categories WHERE status=0");
										while($row=mysql_fetch_array($cat)){
									?>		
									<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
									<?php		
										}
									 ?>
								</select>		
						</div>
					
					<div class="form-group">
						<label>Question</label>
						<textarea class="form-control" name="que" placeholder="Enter Question" required></textarea>
					</div>
					<div class="form-group">
						<label>First Option</label>
						<input type="text" name="ch1" class="form-control" placeholder="Enter first answer" required>
					</div>
					<div class="form-group">
						<label>Second Option</label>
						<input type="text" name="ch2" class="form-control" placeholder="Enter second answer" required>
					</div>
					<div class="form-group">
						<label>Third Option</label>
						<input type="text" name="ch3" class="form-control" placeholder="Enter three answer" required> 
					</div>
					<div class="form-group">
						<label>Fourth Option</label>
						<input type="text" name="ch4" class="form-control" placeholder="Enter four answer" required>
					</div>
					<div class="form-group">
						<label>Answer</label>
						<input type="text" name="answer" class="form-control" placeholder="Enter correct answer" required>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Submit">
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