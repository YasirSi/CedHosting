<?php
include('dbConnect.php');
include('user.php');

$dbConnect = new dbConnect();

if(isset($_POST['submit']))
{
	$name = isset($_POST['name']) ? ($_POST['name']) : "";
	$mobile = isset($_POST['mobile']) ? ($_POST['mobile']) : "";
	$email = isset($_POST['email']) ? ($_POST['email']) : "";
	$password = isset($_POST['password']) ? ($_POST['password']) : "";
	$confirmpassword = isset($_POST['confirmpassword']) ? ($_POST['confirmpassword']) : "";
	//echo $name, $mobile, $email ,$password, $repassword;

	$user = new user();
	
	$sql = $user->signup( $name, $mobile, $email, $password, $confirmpassword, $dbConnect->connect);
	echo $sql;
}  



?>
<!DOCTYPE HTML>
<html>
<head>
<title>CedHosting</title>
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
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
     <div>
		 <?php include("header.php"); ?>
	 </div>
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form method="POST" action=""> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>Name<label>*</label></span>
						<input type="text" name="name" required> 
					 </div>
					 <div>
						  <span>Mobile<label>*</label></span>
						  <input type="number" name="mobile" required> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email" required> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <!-- <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label> -->
					   </a>
					 </div>
					 <div class="register-bottom-grid">
  					     <h3>security questions</h3> 
 
							 <div>
								<span>questions<label>*</label></span>
								<select name="" id="">
								<option value="">Select one of the question </option>
								<option value="">What was your childhood nickname?</option>
								<option value="">What is the name of your favourite childhood friend?</option>
								<option value="">What was your favourite place to visit as a child?</option>
								<option value="">What was your dream job as a child?</option>
								<option value="">What is your favourite teacher's nickname?</option>

								</select>

							 </div>
							 <div>
								<span>answer<label>*</label></span>
								<input type="password">
							 </div>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" name="password" required>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="confirmpassword" required>
							 </div>
					 </div>
			
				    <div class="clearfix"> </div>
				   <div class="register-but">
				   
					   <input type="submit" value="submit" name="submit">
					   <div class="clearfix"> </div>
			  </form>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
				<div>
					<?php include("footer.php"); ?>
				</div>
</body>
</html>




<!-- <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <label class="input-group-text text_size" for="inputGroupSelect01">PICKUP</label>
                        </div>
                        <select name="pickup" class="custom-select nosamelocation" id="current-location">
                            <option selected disabled>Current-location</option>
                            <option value="charbagh">Charbagh</option>
                            <option value="indiranagar">Indira Nagar</option>
                            <option value="bbd">BBD</option>
                            <option value="barabanki">Barabanki</option>
                            <option value="faizabad">Faizabad</option>
                            <option value="basti">Basti</option>
                            <option value="gorakhpur">Gorakhpur</option>
                        </select>
                    </div> -->