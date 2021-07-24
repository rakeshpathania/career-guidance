


	<?php
					require_once("connect.php");
		
						$questionid=$_POST["questionid"];
						$uid=$_POST["uid"];
						$uname=$_POST["uname"];
						$qname=$_POST["qname"];
						$jname=$_POST["jname"];
						$question=$_POST["question"];
			$query="insert into questions values('$questionid','$uid','$uname','$qname','$jname','$question')";
			//echo $query;
			mysql_query($query);
			header("location:userquestionform.php?uid=$uid");
		//echo $query;				
		?>