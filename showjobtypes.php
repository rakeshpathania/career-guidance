
<html>
<head>
	
	<?php	require_once("headincludes.php");?>
	
	<?php
					require_once("connect.php");
					$query="select max(jid) as jid from jobtypes";
					$rows=mysql_query($query);
					$records=mysql_fetch_array($rows);
					extract($records);
					$jid++;
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
	<div class="agileits-con">
		<div class="contact-w3-agileits">
			<div class="container">
			
				<h2 class="w3ls_head">Show Jobtypes</h2>
					
						<?php
					require_once("connect.php");

					$query="select*from jobtypes";
					$data=mysql_query($query);
					$num=mysql_num_rows($data);
					if($num==0)
					{
						echo "records are not found";
					}
					else
					{
					echo"<center>";	
					echo"$num records are found";
					echo"<center>";
					//echo"<center>";
					echo"<table border='2'width='80%'>
						<tr 	style='background-color:yellow; font-size:20px;text-align:center;'>
						<td colspan='4'><a href='jobtype.php'>Add Jobtype</a></td></tr>
						<tr style='background-color:yellow; text-align:center;'>
						<td>Jobtype ID</td>
						
						<td>Jobtype Name</td>
						
						
						<td>Edit</td>
						<td>Delete</td>
						</tr>";
						while($row=mysql_fetch_array($data))
							{
								extract($row);
								echo"<tr	style='text-align:center;'>";
								
								echo"<td>$jid</td>";
								echo"<td>$jname</td>";
								echo"<td><a href='editjobtypes.php?jid=$jid'/>edit</a></td>";
								echo"<td><a href='deletejobtypes.php?jid=$jid'/>delete</a></td>";
								echo"</tr>";
							}
							echo"</table></center>";
			}
						
						
		?>
							
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