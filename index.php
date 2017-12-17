<?php ob_start();
include 'partial/header.php';
// include 'inc/User.php';
include 'inc/Event.php';
Session::checkSession();
?>

	 <?php 
	 	 if (isset($_GET['action']) && $_GET['action'] == 'logout') {
	 	 	Session::destroy();
	 	 }
	 ?>

	 <?php 
	 	 $event = new Event();
	 	$allEvent = $event->getAllEvent();

	 ?>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Online Quiz System</a>
				</div>
				<ul class="nav navbar-nav pull-right">
					<?php 
						$id = Session::get('id');
						$userlogin = Session::get('login');
						$usertype = Session::get('type');
						if ($userlogin == true && $usertype == 0) {	
					?>
						<li><a href="profile.php?id=<?php echo $id ?>">Profile</a></li>
						<li><a href="?action=logout">Logout</a></li>
					<?php } elseif ($userlogin == true && $usertype == 1) {
					 ?>
					 <li><a href="profile.php?id=<?php echo $id ?>">Profile</a></li>
					 <li><a href="events.php">Go to Admin</a></li>
					 <li><a href="?action=logout">Logout</a></li>
					 <?php }else { ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>
		<?php 

	 	$loginmessage = Session::get("loginmessage");

	 	if (isset($loginmessage)) {
	 		echo $loginmessage;
	 	}
	 	Session::set("loginmessage", NULL);

	 ?>
		<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Event List<span class="pull-right"><strong>Welcome! </strong>
				<?php 

					$name = Session::get("name");
					if (isset($name)) {
						echo $name;
					}

				?>
			</span></h2>
		</div>
		<div class="panel-body">
			<?php 
				if ($allEvent) {
				foreach ($allEvent as $event) {
			?>
			<a type="button" class="btn btn-primary btn-block" href=""><?php echo $event['event_name'] ?></a>
			<?php } } ?>
		</div>
	</div>
	</div>
	<?php include 'partial/footer.php'; ?>