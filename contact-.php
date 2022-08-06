<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>

<?php 
include('sql_connect.php'); 
if(isset($_POST['submit'])) 
{

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
 
    
$sql="INSERT INTO customer(f_name,l_name,email,phone,message) VALUES('$f_name','$l_name','$email', '$phone', '$message')";
$sql_check = mysql_query ( $sql) or die ("Query failed");

			if(!$sql_check)
				echo "SQL ERROR";

			else {
				echo "<script> alert('your message has been sent!');
				window.location= 'contact.php'</script>";
			}
}
?>	

</body>
</html>