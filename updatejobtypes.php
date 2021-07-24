<?php
	require_once("connect.php");
	
	$jid=$_POST["jid"];
	$jname=$_POST["jname"];
	
	$query="update jobtypes set jid='$jid', jname='$jname' where jid='$jid'";
	mysql_query($query);
	//echo $query;
	header("location:showjobtypes.php");
?>


