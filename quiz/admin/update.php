<?php
	include '../includes/config.php';
	
	if(isset($_GET['pid'])){
		$pid = $_GET['pid'];
		$SQL = mysql_query("SELECT id,status FROM participant WHERE id='$pid'");

		$row = mysql_fetch_array($SQL);
		$status = $row['status'];
		if($status == 0){
				$SQL1 = mysql_query("UPDATE `participant` SET `status`=1 WHERE id='$pid'");
				if($SQL1){
					header("location:dashboard.php");
				}		
		}else{
				$SQL1 = mysql_query("UPDATE `participant` SET `status`=0 WHERE id='$pid'");
					if($SQL1){
					header("location:dashboard.php");
				}	
		}

		
	}
	if(isset($_GET['qid'])){
		$qid = $_GET['qid'];
		$SQL = mysql_query("SELECT id,status FROM questions WHERE id='$qid'");

		$row = mysql_fetch_array($SQL);
		$status = $row['status'];
		if($status == 0){
				$SQL1 = mysql_query("UPDATE `questions` SET `status`=1 WHERE id='$qid'");
				if($SQL1){
					header("location:dashboard.php");
				}		
		}else{
				$SQL1 = mysql_query("UPDATE `questions` SET `status`=0 WHERE id='$qid'");
					if($SQL1){
					header("location:dashboard.php");
				}	
		}
	}
	if(isset($_GET['did'])){
		$did = $_GET['did'];
		$SQL = mysql_query("SELECT id,status FROM descript WHERE id='$did'");

		$row = mysql_fetch_array($SQL);
		$status = $row['status'];
		if($status == 0){
				$SQL1 = mysql_query("UPDATE `descript` SET `status`=1 WHERE id='$did'");
				if($SQL1){
					header("location:dashboard.php");
				}		
		}else{
				$SQL1 = mysql_query("UPDATE `descript` SET `status`=0 WHERE id='$did'");
					if($SQL1){
					header("location:dashboard.php");
				}	
		}
	}


?>