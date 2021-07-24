


	<?php
					require_once("connect.php");
		
						
						$qid=$_POST["qid"];
						
						$qname=$_POST["qname"];
						
			$query="insert into qualification values('$qid','$qname')";
			//echo $query;
			mysql_query($query);
			header("location:showqualifications.php");
		//echo $query;				
		?>