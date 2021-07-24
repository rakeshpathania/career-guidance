
<!DOCTYPE html>
<html>
<!-- Head -->
<head>

<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: center;
	margin-left:50px;
	margin-bottom:200px;
	margin-top:30px;


}
 th {    
    border: 1px solid #ddd;
	padding:15px;
    text-align: center;
	margin-left:50px;
	background-color:grey;
	font-weight:10px;
	font-size:16px;
	color:white;
	font-family:vardana;

}
 .th1 {    
    border: 1px solid #ddd;
	padding:15px;
    text-align: center;
	margin-left:50px;
	background-color:red;
	font-weight:10px;
	font-size:16px;
	color:white;
	font-family:vardana;
	
}
 .th2 {    
    border: 1px solid #ddd;
	padding:15px;
    text-align: center;
	margin-left:50px;
	background-color:green;
	font-weight:10px;
	font-size:16px;
	color:white;
	font-family:vardana;
	border-radius:60px;

}

table {
    border-collapse: collapse;
    width:90%;
	font-size:13px;
}

td {
    padding: 5px;
	font-family:vardana;
	border-radius:5px;
font-size:16px;
}
</style>

	<?php	require_once("headincludes.php");?>
</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<!-- banner -->
	<div class="w3l-banner2">
	<?php	require_once("header.php");?>	
	<!-- //Header -->
		<div class="container">
			<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
					</section>
				</div>
		</div>
		</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	
	
	<!-- //banner-bottom -->
	<!-- welcome -->
	<div style="background-image:url(images/career.jpg);"   class="wthree-welcome">
		<div class="container">
		<div style='height:auto;width:100%;border:1px solid black;margin-bottom:50px;'>
		<table style="margin-top:20px;color:solid black;border-collapse:collapse;height:250px;width:1000px;color:black;margin-bottom:50px;border:2px solid black;" align="center" >
			<?php 
  require_once("connect.php");
  $via=$_POST["via"];
  $search=$_POST["search"];
  $query="select * from requirements where $via like '%$search%'";
  $data=mysql_query($query);
  $num=mysql_num_rows($data);
  if($num==0)
  {
	  echo "<div class='alerts' style='margin:1em 0';> <div class='alert alert-danger' role='alert'>
			<p><strong>Heads up!</strong>&nbsp;&nbsp;no record</h2></p></div></div>";
  }
   else
   {
	   echo "<h1>".strtoupper($search)."</h1>";
	echo"<tr style='font-size:35px;color:#01A1DD;background-color:black;text-align:center;'><th style='text-align:center;'>Field</th><th style='text-align:center;'>College</th><th style='text-align:center;'>Eligibility</th></tr>";   
   while($row=mysql_fetch_array($data))
   {
	   extract($row);
       echo "<tr ><td style='color:#f99104;font-size:20px;'>".strtoupper($qname)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
	   echo "<td style='color:#f99104;font-size:20px;'>".strtoupper($college)."</td>";
	   	   echo "<td style='color:#f99104;font-size:20px;'>".strtoupper($eligibilty)."</td>";

   }
   echo"</table><br>";
   }
   
  ?>
</div>
	</div>
	<?php require_once("footer.php");?>
	<!-- //welcome -->
	
		<!-- features -->
		
	<!-- //features-->
		<!-- services-bottom -->
		
	<!-- //services-bottom -->
	<!-- footer -->
				<!-- //modal -->  

</body>
<!-- //Body -->
</html>