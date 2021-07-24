


	<?php
					require_once("connect.php");
		
						$rid=$_POST["rid"];
						$cid=$_POST["cid"];
						$qid=$_POST["qid"];
						$college=$_POST["college"];
						$qname=$_POST["qname"];
						$field=$_POST["field"];
						$eligibility=$_POST["eligibility"];
						
						
			$query="insert into requirements values('$rid','$qid','$cid','$field','$qname','$college','$eligibility')";
			//echo $query;
			mysql_query($query);
			header("location:requirements.php");
		//echo $query;				
		?>