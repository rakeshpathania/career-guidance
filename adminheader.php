<div class="header">
		<!-- Top-Bar -->
				<div class="top-bar">
				<div class="container">
					<div class="header-nav">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<h1><a class="navbar-brand" href="adminhome.php?">bright candel</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									
									<?php	require_once("adminmenu.php");?>
									
									<h4 style="color:white; text-decoration:underline;text-align:right; margin-right:15px;">Welcome 
									<?php session_start();
									echo $_SESSION["username"]; ?> &nbsp;!</h4>
									
								</ul>
								
							</div>
							<!-- /navbar-collapse -->

						</nav>
						
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->
	</div>