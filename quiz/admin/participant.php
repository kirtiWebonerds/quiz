<?php
	include '../includes/config.php';
	if(!isset($_SESSION['uname'])){
			header("location:admin.php");
	}
	$SQL = mysql_query("SELECT * FROM participant ");
?>

<body>
	<?php include 'includes/header.php';?>
<div class="container">
		<table id="example" class="table table-bordered table-striped display">
			<thead>
				<tr class="info">
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Action</th>
						
				</tr>	
			</thead>
			<tbody>			
				<?php  $i = 1; while($row = mysql_fetch_array($SQL)){?>
				<tr>
					<td> <?php echo $i; ?> </td>
					<td> <?php echo $row['name']; ?> </td>
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['contact']; ?> </td>
						<td> <?php $status = $row['status']; 
								if($status==1){ ?>
								 <a href="update.php?pid=<?php echo $row['id'];?>" class="btn btn-success btn-block">Activate</a>
								 <?php }else{?>
								 <a href="update.php?pid=<?php echo $row['id'];?>" class="btn btn-danger btn-block">Deativate</a>
								  <?php }?>
					</td>
				</tr>
				<?php $i++;}?>
			</tbody>
		</table>

	</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>