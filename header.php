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
								<h1><a class="navbar-brand" href="index.php">bright candel</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									
									<?php	require_once("menu.php");?>
									
								</ul>
							</div>
							<!-- /navbar-collapse -->

						</nav>
						<div class="cd-main-header">
									<a class="cd-search-trigger" href="search.php"> <span></span></a>
									<!-- cd-header-buttons -->
								</div>
								<div id="cd-search" class="cd-search">
									<form action="search.php" method="POST">
									<table style="margin-left:1000px;"><tr><td><select style="height:50px;" name="via" >
									<option value="field" >Field</option>
									<option value="qname" >Course</option>
									</select></td>
										<td><input name="search" type="text" placeholder="Search..."></td></table>
									</form>
								</div>
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->
	</div>