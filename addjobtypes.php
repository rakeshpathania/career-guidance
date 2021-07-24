


	<?php
					require_once("connect.php");
		
						
						$jid=$_POST["jid"];
						
						$jname=$_POST["jname"];
						
			$query="insert into jobtypes values('$jid','$jname')";
			//echo $query;
			mysql_query($query);
			header("location:showjobtypes.php");
		//echo $query;				
		?>