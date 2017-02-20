<?php
	include 'includes/config.php';
	include "includes/fusioncharts.php";
	if(!isset($_SESSION['email'])){
			header("location:login.php");
	}	
		$user = $_SESSION['email'];
		$SQL = mysql_query("SELECT id,name FROM participant WHERE email='$user'");
		$row = mysql_fetch_array($SQL);
		
		$name =  $row['name'];
		$pid = $row['id'];	
			
		$SQL1 = mysql_query("SELECT * FROM `results` WHERE participant_id = '$pid'");	
		
	
?>
	<?php include 'includes/header.php';?>
		<?php if(isset($success)){echo $success;} ?>
		<?php if(isset($error)){echo $error;} ?>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="test.php">Take Test</a>
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-12">
				<h1>Stats</h1>
				<table class="table table-bordered table-striped display" id="example">
				 	<thead>
				 		<tr>
					 		<th>Sr.no</th>
					 		<th>Marks</th>
					 		<th>Date</th>			 		
				 		</tr>
				 	</thead>
				 	<tbody>
				<?php
					$i=1;
					while($row1 = mysql_fetch_array($SQL1)){						
				 ?>	
				 		<tr>
				 			<td> <?= $i ?></td>
				 			<td><?= $row1['marks'] ?></td>
				 			<td><?= $row1['date'] ?></td>
				 		</tr>
				<?php $i++; }?> 	
				 	</tbody>
				 </table>		
			</div>
			
		</div>		
	</div>	
		
	<?php include 'includes/footer.php';?>
