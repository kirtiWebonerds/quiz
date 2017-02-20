<?php
	include 'includes/config.php';

	$sql=mysql_query("SELECT * FROM categories WHERE status=0");
	
	
	//include "includes/fusioncharts.php";
	
?>
	<?php include 'includes/header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<strong><h3>Play Online Quiz Contest</h3></strong><hr>
					<div class="well">
						<strong>Online Quiz Contest</strong> is a Knowledge sharing and .You can check your knowledge
						  by playing quiz into various category.You can <strong>Play Quiz Online.</strong>
				    </div>
			</div>
		</div>
		<div class="row">
		<?php while($row=mysql_fetch_array($sql)){?>
			<div class="col-md-4">
			
							<div class="well"><a href='test.php?category=<?php echo $row['category']; ?>'><?php echo $row['category']; ?></a></div>				 
			</div>
		<?php }?>


			
			
		</div>	    
	</div>

  <?php include 'includes/footer.php'; ?>
</body>
</html>



					
           