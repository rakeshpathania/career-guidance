
<html>
<head>
	
	<?php	require_once("headincludes.php");?>
	
	
</head>

<body>
	<!-- Header -->
	<!-- banner -->
	<div class="w3l-banner1">
		<?php	require_once("adminheader.php");?>	
	<!-- //Header -->
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="agileits-con">
		<div class="contact-w3-agileits">
			<div class="container">
			<?php
					require_once("connect.php");
					$id=$_GET["jid"];
					$query="select * from jobtypes where jid='$id'";
					$data=mysql_query($query);
					$row=mysql_fetch_array($data);
					extract($row);

					?>
				<h2 class="w3ls_head">Edit Jobtypes</h2>
					
						<form align="center"  method="POST" action="updatejobtypes.php" enctype="multipart/form-data">
					<fieldset>
						
						<center><table border=2	style="text-align:center;">
							<tr>
								<td> Jobtype ID	 </td>	
								<td> <input type="text" value="<?php echo$jid;?>" readonly name="jid" />	 </td>	
							</tr>
							<tr> 
							
							<tr>
								<td> edit Jobtype Name	 </td>
								
								
								<td> <input type="text" value="<?php echo$jname;?>" name="jname" />	 </td>	
							
							
							<tr>
								<td colspan=2 > <input	align="center" type="submit" name="submit" value="Edit Jobtype"> </td>
							</tr>	
							</table></fieldset>
							</form></center>
							
					</div>	
					
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
		
		
	<!-- //banner -->
	<!-- banner-bottom -->
	
	<!-- //banner-bottom -->
	<!-- welcome -->
	
	<!-- //welcome -->
	
		<!-- features -->
		
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