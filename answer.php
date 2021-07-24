


	<?php
					require_once("connect.php");
		
						
						$ansid=$_POST["ansid"];
						$queid=$_POST["queid"];
						$userid=$_POST["userid"];
						$fname=$_POST["fname"];
						$qualname=$_POST["qualname"];						
						$jobname=$_POST["jobname"];						
						$username=$_POST["userquestion"];
						$answer=$_POST["answer"];							
						
						
			$query="insert into answers values('$ansid','$queid','$userid','$fname','$qualname','$jobname','$username','$answer')";
			//echo $query;
			mysql_query($query);
			header("location:allquestions.php");
		//echo $query;				
		?>