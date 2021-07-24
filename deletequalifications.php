<?php
require_once("connect.php");
$qid=$_GET["qid"];
$query="delete from qualification where qid='$qid'";
mysql_query($query);
header("location:showqualifications.php");
?>