
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
	<div class="agileits-con">
		<div class="contact-w3-agileits">
			<div class="container">
				<h2 class="w3ls_head">Contact</h2>
					<div class="col-md-8 contact-w3layouts-left">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name*" required="">
							<input type="email" name="Email" placeholder="Email*" required="">
							<textarea name="Comments" placeholder="Message" required=""></textarea>
							<input type="submit" value="Submit">
						</form>
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