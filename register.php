
<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	<style>
	.tr{
	    line-height:5px;
}
</style>
	
	
	<?php	require_once("headincludes.php");?>
	<?php
					require_once("connect.php");
					$query="select max(uid) as uid from users";
					$rows=mysql_query($query);
					$records=mysql_fetch_array($rows);
					extract($records);
					$uid++;
					?>
					
				
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
			<div class="container">
			
				<h2 class="w3ls_head">Register Here</h2>
						<form align="center"  method="POST" action="adduser.php" enctype="multipart/form-data">

						
						<table style='height:auto;width:auto;' border='2px solid black;'>
							<tr class='tr' >
								<td> User ID	 </td>	
								<td> <input type="text" value="<?php echo$uid;?>" readonly name="uid" id="uid"/>	 </td>	
							</tr>
							<tr class='tr'> 
							<td>  First name </td>
							<td> <input type="text" name="fn" > </td>
							</tr>
							
							<tr class='tr'>
								<td> Last Name	 </td>		
								<td> <input type="text" name="ln" id="ln" /> 	 </td>
							</tr>
			
							<tr class='tr'>
								<td> User Name	 </td>	
								<td> <input type="text"  name="uname" id="uname"/>	 </td>	
							</tr>
							
							<tr class='tr'>
								<td>password	 </td>
								<td> <input type="password" name="pw" id="pw"/> 	 </td>	
							</tr>
							<tr>
								<td class='tr'>Confirm password	 </td>
								<td> <input type="password" name="cpw" id="cpw"/> 	 </td>	
							</tr>
							
							<tr class='tr'>
								<td> DOB	 </td>
								<td>
								
								<select name="dd" selected="date">
										
									<?php
										
										
										for($i=1;$i<=31;$i++)
										{
											echo"<option> $i </option>";
											
										}
									?>
								
								</select>
								
								<select name="mm" selected="date">
										
									<?php
										
										
										for($i=1;$i<=12;$i++)
										{
											echo"<option> $i </option>";
											
										}
									?>
								
								</select>
								
								<select name="yyyy" selected="date">
										
									<?php
										
										
										for($i=1990;$i<=2017;$i++)
										{
											echo"<option> $i </option>";
											
										}
									?>
								
								</select>
								
								
								
								
								</td>	
							</tr>
							
							<tr class='tr'> 	<td> Gender</td>
							<td> <input type="radio" name="gender" value="male"> Male 
							<input type="radio" name="gender" value="female"> Female </td>

							</tr>
							<tr class='tr'>
								<td> Snap	 </td>
								<td> <input type="file" name="snap" /> 	 </td>	
							</tr>
							
							
							<tr class='tr'>
								<td colspan=2 > <input	align="center" type="submit" name="submit" value="Register"> </td>
							</tr>	
							</table>
							</form>
							
					</div>	
					
		
	<!-- //contact -->
	<!-- footer -->
	<?php	require_once("footer.php");?>	
	<!-- //footer -->
</body>
<!-- //Body -->
</html>