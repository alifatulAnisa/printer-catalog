<?php
	session_start();
?>

<?php
include ('sql_connect.php');

if (isset($_POST['create'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];

	$sql = "INSERT INTO customer (username, email, phone, password) VALUES('$username', '$email', '$phone', '$password')";

    $sql_check = mysql_query ( $sql) or die ("Query failed");

		if(!$sql_check){
			echo "SQL ERROR";
		}
		else {
			echo "<script> alert('Register Submitted!');
				window.location= 'index.html'</script>";
		}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Entregreen Website</title>

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			background-size: 100% 700px;
			background-repeat: no-repeat;
		}

		h1{
			text-align: center;
			padding: 20px;
			color: black;
		}

		h2{
			text-align: center;
			padding: 20px;
		}

		.register{
			background: #faafd8;
			width: 500px;
			margin: 0px 0px 0px 430px;
			color: black;
			font-size: 18;
			padding: 20px;
			border-radius: 10px;
		}

		#register{
			margin-left: 50px;
		}

		label{
			color: black;
			font-family: sans-serif;
			font-size: 18px;
			font-style: italic;
		}

		#name{
			width: 300px;
			border: none;
			border-radius: 3px;
			outline: 0;
			padding: 7px;
		}

		#ph{
			width: 65px;
			padding: 7px;
			border: none;
			border-radius: 3px;
			outline: 0;
		}

		#num{
			width: 300px;
			padding: 7px;
			border: none;
			border-radius: 3px;
			outline: 0;
		}

		#sub{
			width: 200px;
			padding: 7px;
			font-size: 16px;
			font-family: sans-serif;
			font-style: italic;
			font-weight: 600;
			border: none;
			border-radius: 3px;
		}
	</style>
</head>
<!--body style="background-image: url(images/1.jpg);"-->
<body>
	<h1>Registration Form</h1>
	<div class="register" style="background: lightblue; width: 500px; margin: 0px 0px 0px 430px; color: black; font-size: 1;">
		<form method="post" id="register" action="registerCust.php">
			<label for="username">Username: </label><br>
			<input type="text" name="username" placeholder="Enter Username Name" required><br><br>
			<label>Email: </label><br>
			<input type="email" name="email" placeholder="Enter Your Email" required><br><br>
			<label for="phone">Phone Number: </label><br>
			<input type="text" name="phone" placeholder="Enter Your Phone Number" required><br><br>
			<label>Password: </label><br>
			<input type="password" name="password"placeholder="Enter Your Password" required><br><br>
			<input type="submit" value="Register" name="create" required>
		</form>
	</div>
</body>
</html>
