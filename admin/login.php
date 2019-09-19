<?php include"../classes/Adminlogin.php"; ?>
<?php 
		$ad = new Adminlogin();
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$adminUser = $_POST["admin_user"];
			$adminPass = md5($_POST["admin_pass"]);

			$loginCk = $ad->Adminlogin($adminUser, $adminPass);
		} ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="admin_user"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="admin_pass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>