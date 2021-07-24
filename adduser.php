


	<?php
					require_once("connect.php");
		
						
						$uid=$_POST["uid"];
						$firstname=$_POST["fn"];
						$lastname=$_POST["ln"];
						$username=$_POST["uname"];
						$password=$_POST["pw"];						
						$day = $_POST["dd"];
						$month = $_POST["mm"];
						$year = $_POST["yyyy"];
						$dob = $year."/".$month."/".$day;
						$gender=$_POST["gender"];
						//$suggestions=$_POST["suggestions"];
						
						//$type="";
						$snap= "default.jpg" ;
						
						
							if($_FILES["snap"]["error"]==0)
							{
								
								
								$type=$_FILES["snap"]["type"];
								$temp=explode("/",$type);
								$ext=$temp[1];			
									if($ext=="jpg" || $ext=="jpeg" || $ext=="pjpeg" || $ext=="gif" || $ext=="png")
									{
									$snap=$uid.".".$ext; //102.png
									$newpath="userimages/".$snap; //images/102.jpg
									move_uploaded_file($_FILES["snap"]["tmp_name"],$newpath);
									}
							}
			$query="insert into users values('$uid','$firstname','$lastname','$username','$password','$dob','$gender','$snap','user')";
			//echo $query;
			mysql_query($query);
			header("location:login.php?uid=$uid");
		//echo $query;				
		?>