<?php
	include 'includes/config.php';
	

	if(isset($_POST['submit'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];

	$sql=mysql_query("INSERT INTO feedbacks(name,email,comment) VALUES('$name','$email','$comment')");
	$success="feedback save successfully";
	}
?>
	<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			<?php if(isset($success)){echo "<div class='alert alert-success'><strong></strong>$success</div>";}?>
				<div class="panel panel-success">
				<div class="panel panel-heading">Feedback Form</div>
					<div class="panel-body">
						<form action="#" method="POST">
							<div class="form-group">
								<input type="text" class="form-control"  name="name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<textarea name="comment" class="form-control" id="comment" placeholder="Comment"></textarea>
							</div>
							<div>
								<input type="submit" name="submit" class="btn btn-primary" value="Submit your feedback">
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



					
           