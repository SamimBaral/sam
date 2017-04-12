<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php"); ?>
</div>
	<div id="content_hor1">

			<h2 align="center">Staff Menu</h2>
			<p align="center">Welcome to the staff area, <?php echo $_SESSION['username']; ?>.</p><br/>
			<ul>
				<li><a href="content.php">Manage Website Content</a></li>
				<li><a href="new_user.php">Add Staff User</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	<div id="footer">	
<?php include("includes/footer.php"); ?> </div>
</div>
