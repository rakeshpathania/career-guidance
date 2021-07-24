
<!DOCTYPE html>
<html>
<head>
	
	<?php	require_once("headincludes.php");?>
	
	
</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<!-- banner -->
	<div class="w3l-banner1">
		<?php	require_once("adminheader.php");?>	
	<!-- //Header -->
	</div>
	<!-- //banner -->
	<!-- contact -->
	
			
				<h2 class="w3ls_head">Suggest Awnser</h2>
	<!-- //welcome -->
	
		<!-- features -->
		
			<div>
				<form align="center"  method="POST" action="answer.php" enctype="multipart/form-data">
					<fieldset>
						
						<center><table border=2	width="50%"style="text-align:center;">
						<?php
								require_once("connect.php");
								$questionid=$_GET['questionid'];
								$query="select * from questions where questionid='$questionid'";
								
								$data=mysql_query($query);
								while($row=mysql_fetch_array($data))
								{
								extract($row);
								
								}
								?>
								<?php
								require_once("connect.php");
								$query="select max(ansid) as ansid from answers";
								$rows=mysql_query($query);
								$records=mysql_fetch_array($rows);
								extract($records);
								$ansid++;
								?>
							<tr>
								<td> Answer ID	 </td>	
								<td > <input  type="text" value="<?php echo$ansid;?>" name="ansid" readonly />	 </td>	
							</tr>	
							<tr>
								<td> Question ID	 </td>	
								<td > <input  type="text" value="<?php echo$questionid;?>" name="queid" readonly />	 </td>	
							</tr>
							<tr>
								<td> User ID</td>	
								
								<td > <input  type="text" value="<?php echo$uid;?>" name="userid" readonly />	 </td>
							</tr>
							<tr> 
							<td>  First name </td>
							<td><input type='text' name='fname' value='<?php echo $username;?>' readonly	 ></td>
							
					
							</tr>
							
							<tr>
								<td> User's Qualification </td>
								<td>
									<input type='text' name='qualname' value='<?php echo $qname;?>' readonly>
								</td>	
								</tr>
								
								<tr>
								<td> Jobtype user's need </td>
								<td>
									<input type='text' name='jobname' value='<?php echo $jname;?>'  >
								</td>	
								</tr>
							
							
							<tr>
							
							<tr>
							<td>User's Question</td>
							
							<td> <input style="height:150px;width:400px;" type="text" value="<?php echo$question;?>" name="userquestion" ></td>
							
							</tr>
							
							<tr>
							<td> Sugeested Awnser</td>
							
							<td> <input style="height:150px;width:400px;" type="text" name="answer" placeholder="Suggest answer to user."></td>
							
							</tr>
							
								<center><td colspan=2  ><center> <input	style="background-color:yellow;font-size:25px;" type="submit" name="submit" value="submit awnser"></center></br> </td>
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