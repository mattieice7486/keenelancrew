<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAN CREW</title>

   <!-- Bootstrap core CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="templates/css/custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="templates/js/bootstrap.js"></script>
	<script src="templates/js/ckeditor/ckeditor.js"></script>
	<?php
    //Check if title is set, if not assign it
    if(!isset($title)){
    	$title = SITE_TITLE;
    }
    ?>
  </head>

  <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-#000">
			<a class="navbar-brand" href="index.php">
				<img src="images/title.jpg" width="auto" height="auto" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="lans.php">LANS <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tournaments.php">Tournaments</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profiles.php">Profiles</a>
					</li>
					<?php if(!isLoggedIn()) : ?>
						<li class="nav-item"><a class="nav-link" href="register.php">Create An Account</a></li>
					<?php else : ?>
						<li class="nav-item"><a class="nav-link" href="create.php">Create Topic</a></li>
					<?php endif; ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							More
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="awards.php">Awards</a>
							<a class="dropdown-item" href="pics.php">Pics</a>
							<a class="dropdown-item" href="downloads.php">Downloads</a>
							<a class="dropdown-item" href="contact.php">Contact</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>