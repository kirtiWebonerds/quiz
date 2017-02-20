<?php
	include '../includes/config.php';
	if(!isset($_SESSION['uname'])){
			header("location:admin.php");
	}

	$SQL1 = mysql_query("SELECT * FROM questions");
		
?>

<body>
	<?php include 'includes/header.php';?>
<div class="container">
		<table  id="example1" class="table table-bordered table-striped">
		  <thead>
		    <tr class="info">
			<th>#</th>
			<th>Questions</th>
			<th>Options 1</th>
			<th>Options 2</th>
			<th>Options 3</th>
			<th>Options 4</th>
			<th>Correct Answer</th>
			<th>Action</th>
			
			</tr>
		</thead>
		<tbody>
			<?php $i=1; while($row = mysql_fetch_array($SQL1)){?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td> <?php echo $row['questions']; ?> </td>
				<td> <?php echo $row['1']; ?> </td>
				<td> <?php echo $row['2']; ?> </td>
				<td> <?php echo $row['3']; ?> </td>
				<td> <?php echo $row['4']; ?> </td>
				<td> <?php echo $row['answer']; ?> </td>
				<td> <?php $status = $row['status']; 
							if($status==1){ ?>
							 <a href="update.php?qid=<?php echo $row['id'];?>" class="btn btn-success btn-block">Activate</a>
							 <?php }else{?>
							 <a href="update.php?qid=<?php echo $row['id'];?>" class="btn btn-warning btn-block">Deativate</a>
							  <?php }?>
				</td>
			</tr>
			<?php $i++;}?>
		</tbody>	
		</table>
	</div>

<?php include 'includes/footer.php'; ?>

