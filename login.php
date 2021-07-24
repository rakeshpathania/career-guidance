
<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	
	<?php	require_once("headincludes.php");?>
</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<!-- banner -->
	<div class="w3l-banner1">
		<?php	require_once("header.php");?>	
	<!-- //Header -->
	</div>
	<!-- //banner -->
	<!-- contact -->
<div style='width:800px;' class="border">
<div class="formdiv">
<table style="margin-left:20px; margin-top:300px;">
<form method="POST" action="check.php">

<tr class="lh">
<td valign="top">Username:</td>
<td><input type="text" name="uname" class="form-control no-border" /></td><br>
</tr>

<tr class="lh">
<td valign="top">Password:</td>
<td><input type="password"  name="pw" class="form-control no-border"></td><br>
</tr>

<tr>
<center>
<td></td>
<td><input type="submit" value="Submit" style="margin-top:25px; background-color:black;color:white; border-radius:5px;border-color:black;width:100px;height:30px;"/>&nbsp;&nbsp;
<input type="reset" value="Reset" style="margin-top:25px;width:100px; height:30px;background-color:red;color:white;border-radius:5px; border-color:red;"/>
</td>
</center>
</tr>

</form>
</table>
</div>
</div>




				<div class="col-md-4 contact-w3layouts-right">
						<h4>Address</h4>
						<ul>
							<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 7th Street, jalandhar, Punjab.</li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (4584) 5689 0254 128</li>
						</ul>
					</div>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
		
	<!-- //contact -->
	<!-- footer -->
	<?php	require_once("footer.php");?>	
	<!-- //footer -->
</body>
<!-- //Body -->
</html>