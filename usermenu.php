		

<?php
			//$uid=$_GET["uid"];
			echo"<li><a  href='userhome.php'>Home</a></li>
			<li><a href='userquestionform.php'>Ask a Question</a></li>
			<li><a href='userquestions.php'>Your Questions</a></li>
			
			
			<li><a href='index.php'>Logout</a></li>";
			
			?>
			
			
			
			

			
		<h4 style="color:white; text-decoration:underline;text-align:right; margin-right:15px;">Welcome 
									<?php
									echo $_SESSION["username"]; ?> &nbsp;!</h4>	