
<!DOCTYPE html>
<html>
<head>
	
	<?php	require_once("headincludes.php");?>
	
	<?php
					require_once("connect.php");
					$query="select max(rid) as rid from requirements";
					$rows=mysql_query($query);
					$records=mysql_fetch_array($rows);
					extract($records);
					$rid++;
					?>
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
	
			
				<h2 class="w3ls_head"> Select Requirenmts</h2>
	<!-- //welcome -->
	
		<!-- features -->
		
			<div>
				<form align="center"  method="POST" action="addrequirements.php" enctype="multipart/form-data">
					<fieldset>
						
						<center><table border=2	width="50%"style="text-align:center;">
							<tr>
								<td> Requirement ID	 </td>	
								<td > <input  type="text" value="<?php echo$rid;?>" readonly name="rid" />	 </td>	
							</tr>
							
							
							
							<tr>
								<td> Select  Qualification  </td>
								<td>
									<select name="qid">
									<?php require_once("connect.php");
									$query="select * from mainqualification";
									$data=mysql_query($query);
									while($row= mysql_fetch_array($data))
									{
										extract($row);
										echo"<option value='$qid'>$qualification</option>";
									}										
									?>
									</select>
								</td>	
								</tr>
								
								<tr>
								<td> Select  field </td>
								<td>
									<select name="field">
									<?php require_once("connect.php");
									$query="select * from courses";
									$data=mysql_query($query);
									while($row= mysql_fetch_array($data))
									{
										extract($row);
										echo"<option value='$field'>$field</option>";
									}										
									?>
									</select>
								</td>	
								</tr>

								<tr>
								<td> Select  Courses </td>
								<td>
									<select name="cid">
									<?php require_once("connect.php");
									$query="select * from courses";
									$data=mysql_query($query);
									while($row= mysql_fetch_array($data))
									{
										extract($row);
										echo"<option value='$cid'>$qname</option>";
									}										
									?>
									</select>
								</td>	
								</tr>
<tr>
								<td> Course </td>	
								<td > <input  type="text"  name="qname" />	 </td>	
							</tr>
							
							

								
							
							
							<tr>
							
							<tr>
							<td>	Add College</td>
							
							<td> <input name="college" placeholder="Add college here."></td>
							
							</tr>
							<tr>
							<td>	Add Eligibilty</td>
							
							<td> <input name="eligibility" placeholder="Add eligibility here."></td>
							
							</tr>
								<center><td colspan=2  ><center> <input	style="background-color:yellow;font-size:25px;" type="submit" name="submit" value="Add Requirement"></center></br> </td>
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