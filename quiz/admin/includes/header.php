<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.min.css">
	
 

</head>
<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">
				Quiz Contest<!--<?php  echo date('Y');?>-->	
		 </a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <?php if(isset($_SESSION['uname'])) { ?>
	      <ul class="nav navbar-nav">
	        <li><a href="dashboard.php">Home</a></li>
	           <li><a href="add.php">Add Questions</a></li>
	            <li><a href="questions.php">Questions</a></li>
	            <li><a href="participant.php">participant</a></li>
	             <li><a href="category.php">Category</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      		
	      		<li><a href="#"><?php echo 'Hello'.' '.$_SESSION['uname'];?></a></li>
	      		 <li><a href="../logout.php">Logout</a></li>


	      </ul>
	      <?php } ?>
	    </div>
	  </div>
</nav>