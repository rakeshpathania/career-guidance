<?php
	require_once("connect.php");
	
	$qid=$_POST["qid"];
	$qname=$_POST["qname"];
	
	$query="update  mainqualification set qid='$qid', qname='$qname' where qid='$qid'";
	mysql_query($query);
	//echo $query;
	header("location:showqualifications.php");
?>


