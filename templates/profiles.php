<?php include('includes/header.php'); ?>

	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="main-col">
				<div class="block">
					<div class="clearfix"></div>
					<?php displayMessage(); ?>
					<div class="row">
						<div class="col-8">
							<div class="block">
							<img src="images/profile_pics/elliot.jpg">
							<h3>Elliot</h3>
							<table>
								<tbody>
									<tr><td><strong>Nickname:</strong></td><td><?php echo $profile->nickname; ?>CI7IZ3N / TastyLobster</td></tr>
									<tr><td><strong>Age:</strong></td><td><?php echo $profile->age; ?></td></tr>
									<tr><td><strong>Location:</strong></td><td><?php echo $profile->location; ?></td></tr>
									<tr><td><strong>Fav Quote:</strong></td><td><?php echo $profile->favquote; ?></td></tr>
									<tr><td><strong>Fav Game:</strong></td><td><?php echo $profile->favgame; ?></td></tr>
									<tr><td><strong>Fav Food:</strong></td><td><?php echo $profile->favfood; ?></td></tr>
									<tr><td><strong>Fav Movie:</strong></td><td><?php echo $profile->favmovie; ?></td></tr>
									<tr><td><strong>Hobbies/Interests:</strong></td><td><?php echo $profile->hobbies; ?></td></tr>
								</tbody>
							</table>
							<div class="list-group">
							<?php foreach(getAllProfiles() as $profile) : ?>
								<a href="topics.php?profile=<?php echo $profile->id; ?>" class="list-group-item <?php echo is_active($profile->id); ?>"><?php echo $profile->nickname; ?> </a> 
							<?php endforeach; ?>
							</div>
						</div>


</div>
<?php include('includes/footer.php'); ?>	
