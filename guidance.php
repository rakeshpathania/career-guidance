
	
		
		
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
	<div class="w3l-banner">
	<?php	require_once("userheader.php");?>	
	
	
	<!-- //Header -->
		<div class="container">
			<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
								<div class="w3l-info">
									<h3>Welcome to our Carrier Guidance company</h3>
									<p>To make a career and thus a living is very important in a life. You have to be very objective in deciding a career and you can find help doing that over here.</p>
									<div class="agileinfo-news-button">
										<a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal"> Read More</a>
									</div>
								</div>
								</li>
								<li>
								<div class="w3l-info">
									<h3>Welcome to our Carrier Guidance company</h3>
									<p>Career choice made turns the life of a person by a great measure. Although salaries matter, if you get into a field which you love, you will be happy all your life.</p>
									<div class="agileinfo-news-button">
										<a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal"> Read More</a>
									</div>
								</div>
								</li>
								<li>
								<div class="w3l-info">
									<h3>Welcome to our company</h3>
									<p>Many experts predict the emergence of new roles in the coming years with specialized educational courses evolving to serve the industry. </p>
									<div class="agileinfo-news-button">
										<a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal"> Read More</a>
									</div>
								</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="w3layouts-banner-bottom">
		<div class="container">
		<?php require_once("connect.php");
				
				$query="select * from mainqualification";
				$data=mysql_query($query);
				while($row= mysql_fetch_array($data))
				{
					extract($row);
					
			echo "<div class='col-md-3 agileits-bottom-top'>";
				echo "<h3><a href='guidance.php?qid=$qid'>$qualification</a><br><span> Our management is highly experianced.	</span><br></h3>";	
					
				echo "</div>";
				}
				?>
				
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- welcome -->
	<div class="wthree-welcome">
		<div class="container">
			<h2>Welcome </h2>
			<div class="border"> </div>
			
			<div class="col-md-6 wthree-welcome-left">
			
			<?php require_once("connect.php");
				$qid=$_GET['qid'];
				$query="select * from requirements r,courses c where r.qid='$qid' and r.qid=c.qid ";
				$data=mysql_query($query);
				{			
					echo"<table border='2'width='80%'>
						<tr 	style='background-color:yellow; font-size:20px;text-align:center;'>
						</tr>
						<tr style='background-color:yellow; text-align:center;'>
						
						
						
						<td>Course name</td>
						<td>College</td>
						<td>Eligiblity</td>
						</tr>";
						while($row=mysql_fetch_array($data))
							{
								extract($row);
								echo"<tr	style='text-align:center;'>";
								
								
								echo"<td>$qname</td>";
								echo"<td>$college</td>";
								echo"<td>$eligibilty</td>";
								echo"</tr>";
							}
							echo"</table></center>";
					
					
				}
				?>
			
			
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
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