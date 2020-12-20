<!-- localhost/slicesnbites/user.php -->
<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>

<!-- main container -->
<div class="container" id="container">
	<!-- Signup container -->
	<div class="form-container sign-up-container">
		<form action="user.php" method="POST">
			<h1>Create Account</h1>
			<br>
			<input type="text" name="username" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="password" placeholder="Password" required>
			<button name="submit">Sign-Up</button>
		</form>
	</div>
	<!-- PHP code for SIGN-UP -->
	<?php
	session_start(); 
	// connectivity code file
	include_once('config.php');
	// check or insert after clicking on submit
	if(isset($_POST['submit'])){
		// $username = mysqli_real_escape_string($db,$post['username']);//username is not visible
		$username= $_POST['username'];
    	$email= $_POST['email'];
		$password= $_POST['password'];
		// query to insert in database
		$sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
		// checking
		if(mysqli_query($conn,$sql)){
			echo "new record is created";
		}
		else{
			echo "error";
		}
		mysqli_close($conn);
		// aftersignup directly will go to main page
		header("location:user.php");
	}
	?>
	<!-- ENDof PHP code -->

	<!-- Sign in form-->
	<div class="form-container sign-in-container">
	<form action="user-signin.php" method="POST">
		<h1>Sign In</h1>
		<br>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<a href="#">Forgot Your Password</a>
		<button name="submit">Sign In</button>
	</form>
</div>

<!-- OVERLAY PANNELS  -->
<div class="overlay-container">
	<!-- LEFT pannel -->
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>Sign-in with us to Filling your tummy with our Tasty, hot pizza's.</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<!-- Right PANNEL -->
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and Eat the pizza you dream about at affordable prices.</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<!-- Script to actually work the panel -->
<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>
