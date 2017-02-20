<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
<nav class="navbar navbar-inverse">
	  <div class="container-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="index.php">
				Quiz Contest <!--<?php  echo date('Y');?>-->
		 </a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	      	  <li><a href="index.php">Home</a></li>
	       	 <li><a href="playquiz.php">Play Quiz</a></li>
	    	 <li><a href="feedback.php">Feedback</a></li>
	       	<?php if(!isset($_SESSION['email'])) { ?>
	       	 <li><a href="register.php">Sign up</a></li>
	       	 <li><a href="login.php">Login</a></li> 
	      	<?php }?>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="dropdown">
	      	<?php if(isset($_SESSION['email'])) { ?>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo 'Hello  '.$_SESSION['email'];?> 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">logout</a></li> 
          </ul>
          <?php } ?>
        </li>
	      </ul>
	    </div>
	  </div>
	  <div class="container">
	  </div>
</nav>