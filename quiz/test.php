<?php
	include 'includes/config.php';
	if(!isset($_GET['category'])){
		header("location:playquiz.php");
	}else{
		$category = $_GET['category'];
		$_SESSION['category']=$category;
	}
	$marks = 0;
	
	if(isset($_POST['submit'])){
		
		$SQL = mysql_query("SELECT id,answer,category FROM questions WHERE category='$category'");
		$row = mysql_fetch_array($SQL);	
		$row_cnt = mysql_num_rows($SQL);
		$i=1;
		while($i<=$row_cnt){ 
				
			$answers = $_POST['answers'.$i];
			
			$SQL1 = mysql_query("SELECT * FROM questions WHERE answer = '$answers' AND status=0 AND category='$category'");
			
			$row = mysql_fetch_array($SQL1);
			$count = mysql_num_rows($SQL1);
			
			$marks += $count;

			$i++;
		}
		if(isset($_SESSION['email']))
		{	
					$user = $_SESSION['email'];
					$SQL = mysql_query("SELECT id,name FROM participant WHERE email='$user'");
					$row = mysql_fetch_array($SQL);
					
					$name =  $row['name'];
					$pid = $row['id'];	
					}	
		//$ques = $row1['question'];
		
		$time = date("Y-d-m");
		$totat_marks = 2 * $marks;
		$_SESSION['marks']=$totat_marks;
		$total=  $_SESSION['marks'];
		if(isset($_SESSION['email'])){
			$SQL = mysql_query("INSERT INTO results( `name`,`participant_id`,`category`, `marks`,`date`) VALUES('$name','$pid','$category','$total','$time')");	
			if ($SQL) {
			
				header('location:final.php');

			}else{

				$error = "Please Try Again";
			}			
		}else{
			

			$name= $_POST['name'];
			$_SESSION['guest']['marks'] = $totat_marks;
			$total = $_SESSION['guest']['marks'];
			$_SESSION['guest']['name'] = $name;
			$pid=0;
			 $SQL = mysql_query("INSERT INTO results(`participant_id`, `category`,`name`, `marks`,`date`) VALUES('$pid','$category','$name','$total','$time')");	
			 if ($SQL) {
			
			 	header('location:final.php');

			 }else{

			 	$error = "Please Try Again";
			 }
		}

	}
	$SQL = mysql_query("SELECT * FROM questions WHERE status=0 AND category='$category' ORDER BY RAND() ");
	$cnt = mysql_num_rows($SQL);
	

?>
<?php include 'includes/header.php';?>
<?php 	
	if($cnt==0){
		echo "<center><h1>We are very Sorry :-(</h1></center>";
		$error="No Questions Added ";
	?>
	<div class="container">	
	<div class="row">
		<div class="col-md-offset-4 col-md-4">
				<?php if(isset($success)){echo "<div class='alert alert-success'>$success</div>";} ?>
				
				<?php if(isset($error)){echo "<div class='alert alert-danger'>$error</div>";} ?>			
		</div>
	</div>

	</div>	
<?php
	}else{

?>
		<?php if(isset($success)){echo $success;} ?>
		<?php if(isset($error)){echo $error;} ?>
		
		
	<div class="row">
		<div class="col-md-offset-2 col-md-8  well">
			<form method="post" action="#">
				
			<?php if(!isset($_SESSION['email'])){ 
			?>
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name">	
			</div>
			<?php }?>

				<?php $i=1; $j=1; while($row = mysql_fetch_array($SQL)){ ?>
				<p><?php echo $j.') '.$row['questions']?></p>
			<div class="form-group">
				<input type="radio"  value="<?php echo $row["1"];?>" name="<?php echo "answers".$i; ?>"> <?php echo $row["1"];?>
			
				<input type="radio"  value="<?php echo $row["2"];?>" name="<?php echo "answers".$i; ?>"> <?php echo $row["2"];?>
			
				<input type="radio"  value="<?php echo $row["3"];?>" name="<?php echo "answers".$i; ?>"> <?php echo $row["3"];?>
						
				<input type="radio"  value="<?php echo $row["4"];?>" name="<?php echo "answers".$i; ?>"> <?php echo $row["4"];?>
			</div>
		<?php	$i++; $j++;} ?>
		
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">	
		</form>		
		</div>
	</div>
<?php
}
?>	
	<?php include 'includes/footer.php';?>
</body>
</html>