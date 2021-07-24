<?php
require_once("connect.php");
$jid=$_GET["jid"];
$query="delete from jobtypes where jid='$jid'";
mysql_query($query);
header("location:showjobtypes.php");
?>