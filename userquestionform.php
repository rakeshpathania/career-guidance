
<!DOCTYPE html>
<html>
<head>
	
	<?php	require_once("headincludes.php");?>
	
	<?php
					require_once("connect.php");
					$query="select max(questionid) as questionid from questions";
					$rows=mysql_query($query);
					$records=mysql_fetch_array($rows);
					extract($records);
					$questionid++;
					?>
</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<!-- banner -->
	<div class="w3l-banner1">
		<?php	require_once("userheader.php");?>	
		<?php $uid=$_SESSION["uid"];?>
	<!-- //Header -->
	</div>
	<!-- //banner -->
	<!-- contact -->
	
			
				<h2 class="w3ls_head">Ask Question</h2>
	<!-- //welcome -->
	
		<!-- features -->
		
			<div>
				<form align="center"  method="POST" action="addquestions.php" enctype="multipart/form-data">
					<fieldset>
						
						<center><table border=2	width="50%"style="text-align:center;">
							<tr>
								<td> Question ID	 </td>	
								<td > <input  type="text" value="<?php echo$questionid;?>" readonly name="questionid" />	 </td>	
							</tr>
							<tr>
								<td> User ID	 </td>	
								
								<?php
								require_once("connect.php");
								$query="select * from users where uid=$uid";
								
								$data=mysql_query($query);
								while($row=mysql_fetch_array($data))
								{
								extract($row);
								
								
								echo"<td><input type='text' name='uid' value='$uid' readonly></td>";
								}
								?>
									
							</tr>
							<tr> 
							<td>  First name </td>
							<?php
							require_once("connect.php");
							$query="select * from users where uid=$uid";
							
							$data=mysql_query($query);
							while($row=mysql_fetch_array($data))
							{
							extract($row);
							
							
							echo"<td><input type='text' name='uname' value='$username' readonly	class='phone' ></td>";
							}
							?>
							</tr>
							
							<tr>
								<td> Select Your Qualification </td>
								<td>
									<select name="qname">
									<?php require_once("connect.php");
									$query="select * from courses";
									$data=mysql_query($query);
									while($row= mysql_fetch_array($data))
									{
										extract($row);
										echo"<option value='$qname'>$qname</option>";
									}										
									?>
									</select>
								</td>	
								</tr>
								
								<tr>
								<td> Select Jobtype you need </td>
								<td>
									<select name="jname">
									<?php require_once("connect.php");
									$query="select * from jobtypes";
									$data=mysql_query($query);
									while($row= mysql_fetch_array($data))
									{
										extract($row);
										echo"<option value='$jname'>$jname</option>";
									}										
									?>
									</select>
								</td>	
								</tr>
							
							
							<tr>
							
							<tr>
							<td>Your Question</td>
							
							<td> <input style="height:150px;width:400px;" type="text" name="question" placeholder="Write your query regarding your career."></td>
							
							</tr>
								<center><td colspan=2  ><center> <input	style="background-color:yellow;font-size:25px;" type="submit" name="submit" value="submit question"></center></br> </td>
							</tr>	
							</table></fieldset>
							</form></center></br>
					
			
			
			</div></div></div></div>
		
		
		
	<!-- //features-->
		<!-- services-bottom -->
		
	<!-- //services-bottom -->
	<!-- footer -->
	<?php require_once("uafooter.php");?>
	<!-- //footer -->
					<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"> 
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								<h4 class="modal-title">Bright Candel</h4>
							</div> 
							<div class="modal-body">
								<div class="agileits-w3layouts-info">
									<img src="images/g1.jpg" class="img-responsive" alt="" />
									<p>You may access information that is prepared with great care and effort with inputs from most trusted sources so as to enable you choose the best and most suitable colleges.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //modal -->  

</body>
<!-- //Body -->
</html>