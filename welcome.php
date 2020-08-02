<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="libs/common.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="libs/common.js"></script>
<body>

	<div class="container">
		<div class="row">
				<h1>Creative User Profile</h1>
			<div class="username">
				<h2>Hi <?php echo $_SESSION['email']; ?></h2>
			</div>
		<div>
		<button class="submenu">
			<a href="logout.php?action=logout" class="btn btn-default btn-sm">
			Logout
			</a>
		</button>
	</div>
</body>
</html>