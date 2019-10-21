					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<?php if(isLoggedIn()) : ?>
							<div class="userdata">
							Welcome, <?php echo getUser()['username']; ?>
						</div>
						<br>
						<form role="form" method="post" action="logout.php">
							<input type="submit" name="do_logout" class="btn btn-primary" value="Logout" />
						</form>
						<?php else : ?>
						<form role="form" method="post" action="login.php">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password">
						</div>			
						<button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.php"> Create Account</a>
						</form>
						<?php endif; ?>
					</div>
					
					<div class="block">
					<h3>Categories</h3>
					<div class="list-group">
						<a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">All Topics <span class="badge pull-right"></span></a> 
					<?php foreach(getCategories() as $category) : ?>
						<a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>"><?php echo $category->name; ?> </a> 
					<?php endforeach; ?>
					</div>
				</div>	
				</div>
			</div>
		</div>
    </div><!-- /.container -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>