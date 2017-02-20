
<?php
	include 'includes/config.php';
	if(isset($_SESSION['email']) || isset($_SESSION['guest']['marks'])|| isset($_SESSION['guest']['name'])){
			$message = "Thank You For Participating in Quiz";
	}else{
		header('location:home.php');
	}
?>

	<?php include 'includes/header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 ">
					<div class="panel panel-default">
						<div class="panel-heading">Result</div>
						<div class="panel-body">
							<div class="text-center">
								<h1><?php  echo $message; ?></h1>
								<?php
								$category = $_SESSION['category'];
								$SQL3 = mysql_query("SELECT id,answer FROM questions WHERE status=0 AND category='$category' ");
								$row3 = mysql_fetch_array($SQL3);	
								$row_cnt = mysql_num_rows($SQL3);
								$total_marks=2*$row_cnt;
								if(isset($_SESSION['email'])){
									$email = $_SESSION['email'];
									$SQL1 = mysql_query("SELECT id,name FROM participant WHERE email='$email'");
									$row1 = mysql_fetch_array($SQL1);
									$name = $row1['name'];
									$date = date('Y-d-m');
									$SQL2 = mysql_query("SELECT id,name,marks FROM results WHERE name='$name' AND '$date'");
									$row2 = mysql_fetch_array($SQL2);
								?>
									<div>
										<strong>Your Result - <?php  echo $row2['name'].' : '.$_SESSION['marks'].'/'.$total_marks; ?></strong>										
									</div>
	
								<?php 	
								}else{?>

									<div>
										<strong>Your Result - <?php  echo $_SESSION['guest']['name'].' : '.$_SESSION['guest']['marks'].'/'.$total_marks; ?></strong>										
									</div>								
								<?php 
								}
								?>
								<a href="test.php">Take Retest</a>
								<?php 
									$SQL = mysql_query("SELECT id,name,marks FROM results ORDER BY marks DESC");
									$row = mysql_fetch_array($SQL);
								?>
							<div>
							<strong><?php  echo $row['name'].' : '.$row['marks']; ?></strong>
						</div>
					</div>
			</div>
	</div>
			</div>
		</div>
	</div>
	
	
	<?php include 'includes/footer.php';?>
