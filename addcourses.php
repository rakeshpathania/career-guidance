


	<?php
					require_once("connect.php");
		
						
						$cid=$_POST["cid"];
						$qid=$_POST["qid"];
						$qname=$_POST["qname"];
						$field=$_POST["field"];
						
			$query="insert into courses values('$cid','$field','$qid','$qname')";
			//echo $query;
			mysql_query($query);
			header("location:courses.php");
		//echo $query;				
		?>