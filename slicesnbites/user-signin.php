<!-- php function page for sign in -->
<?php
	include("config.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$myusername = mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
		
		$sql2 = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($conn,$sql2);
		if(!$result){
			printf("error %s\n",mysqli_error($conn));
		}
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		//   $active = $row['active'];
		$count = mysqli_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count == 1) {
			//  session_register("myusername");
			$_SESSION['login_user'] = $myusername;
			header("location: home.php");
		}else {
			echo  "Your Login Name or Password is invalid";
		}
	}
	?>