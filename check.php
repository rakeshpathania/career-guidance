
	
		
			<?php
			
				require_once("connect.php");
			
						$uname=$_POST["uname"];
						$password=$_POST["pw"];	
						
				$query="select * from users where username='$uname' && password='$password'";
				//echo $query;
					$data=mysql_query($query);
					$num=mysql_num_rows($data);
					if($num>0)
					{
					$row=mysql_fetch_array($data);
					extract($row);
					session_start();
					$_SESSION["username"]=$uname;
					$_SESSION["type"]=$type;
					$_SESSION["uid"]=$uid;
					

					if($type=='user')
						{
						header("location:userhome.php?uid=$uid");
						}
					else	
						{
						header("location:adminhome.php");
						}
					}
					else
					{
						header("location:login.php");
					}		
				?>
					
					
						
						