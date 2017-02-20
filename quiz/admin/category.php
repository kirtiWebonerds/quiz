<?php
	include '../includes/config.php';
	if(!isset($_SESSION['uname'])){
			header("location:admin.php");
	}
    if(isset($_POST['submit'])){
    	
    	$category=$_POST['cat'];
    	$status=0;
    		$sql1 = mysql_query("SELECT * FROM categories WHERE category = '$category'");
    		
    		$cnt = mysql_num_rows($sql1);

    		if($cnt == 1){
    			$error = "Category Already Exist";
    		}else{

    		$SQL=mysql_query("INSERT INTO categories(category,status)VALUES('$category','$status')");

    		$success="Category inserted successfully";		
    		}
    	
    

    }
 ?>
<body>
	<?php include "includes/header.php";?>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<?php if(isset($error)){echo "<div class='alert alert-danger'><strong>Error !!!</strong>$error</div>";}?>
				<?php if(isset($success)){echo "<div class='alert alert-success'><strong></strong>$success</div>";}?>
				<div class="panel panel-info">
					<div class="panel panel-heading">Categories</div>
						<div class="panel-body">
							<form method="POST" action="category.php">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter category" name="cat">
								</div>
								<div>
									<input type="submit" name="submit" class="btn btn-primary" value="submit">
								</div>
							</form>
						</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>