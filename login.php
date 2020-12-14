<?php
	session_start();
	
	require_once('class/Dbcon.php');
	require_once('class/User.php');

	$Dbcon = new Dbcon();
	$User = new User();
	
	if(isset($_POST['Login']))
    {
        $email = isset($_POST['email']) ? ($_POST['email']) : "";
		$password = isset($_POST['password']) ? ($_POST['password']) : "";
		
        $sql = $User->Login($email, $password, $Dbcon->connect);
        echo $sql;
    }
	
?>
<!DOCTYPE HTML>
<html>
<head>
<?php 
	include ('header.php');
?>
<title>Ced Hosting</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>						
<!--script-->
</head>
<body>
<!---login--->
<div class="content">
	<div class="main-1">
		<div class="container">
			<div class="login-page">
				<div class="account_grid">
					<div class="col-md-6 login-left">
							<h3>new customers</h3>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
							<a class="acount-btn" href="account.php">Create an Account</a>
					</div>
					<div class="col-md-6 login-right">
						<h3>registered</h3>
						<p>If you have an account with us, please log in.</p>
						<form action="" method="POST">
							<div>
								<span>Email<label>*</label></span>
								<input type="email" name="email" id="email" class="lugwt" onkeydown="return alphaonly3(event);" required >
							</div>

							<div>
								<span>Password<label>*</label></span>
								<input type="password" name="password" class="lugwt" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlength="8" maxlength="16" required>
							</div>

							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login" name="Login">
						</form>
					</div>	
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login -->
<div>
	<?php include('footer.php') ?>
</div>
</body>
</html>