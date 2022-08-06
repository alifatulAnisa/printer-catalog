<?php
session_start();
?>
<?php include('sql_connect.php');
$error=""; 
if(isset($_POST['submithp'])) 
{


       $allowedCompressedType = array("image/jpeg", "image/jpg", "image/jpeg", "image/png");


       if(in_array($_FILES["image"]["type"], $allowedCompressedType) && $_FILES["image"]["size"] > 0)
		{
			 $hp_model=$_GET['hp_model'];
			  $hp_type=$_POST['hp_type'];  
			  $hp_colour=$_POST['hp_colour'];
			  $hp_ds=$_POST['hp_ds'];
			  $hp_price=$_POST['hp_price'];

			$location=$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/hp/" . $_FILES["image"]["name"]);




			$sql="INSERT into hp(hp_model, hp_type,hp_colour, hp_ds, hp_price, image_location) values ('$hp_model','$hp_type','$hp_colour','$hp_ds', '$hp_price', '$location')";
      	     $sql_check = mysql_query ( $sql) or die ("Query failed");

			if(!$sql_check)
				echo "SQL ERROR";

			else {
				echo "<script> alert('image succesfully update!');
				window.location= 'addhp.php'</script>";
			}
		}
		else 
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('File type does not support. Please try again. Thank you')
				    window.location.href='addhp.php'
				    </SCRIPT>");

   }

   if(isset($_POST['submitbrother'])) 
{


       $allowedCompressedType = array("image/jpeg", "image/jpg", "image/jpeg", "image/png");


       if(in_array($_FILES["image"]["type"], $allowedCompressedType) && $_FILES["image"]["size"] > 0)
		{
			 $b_model=$_POST['b_model'];
			  $b_type=$_POST['b_type'];  
			  $b_colour=$_POST['b_colour'];
			  $b_ds=$_POST['b_ds'];
			  $b_price=$_POST['b_price'];

			$location=$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/brother/" . $_FILES["image"]["name"]);




			$sql="INSERT into brother(b_model, b_type,b_colour, b_ds, b_price, bimage_location) values ('$b_model','$b_type','$b_colour','$b_ds', '$b_price', '$location')";
      	     $sql_check = mysql_query ( $sql) or die ("Query failed");

			if(!$sql_check)
				echo "SQL ERROR";

			else {
				echo "<script> alert('image succesfully update!');
				window.location= 'addbrother.php'</script>";
			}
		}
		else 
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('File type does not support. Please try again. Thank you')
				    window.location.href='addbrother.php'
				    </SCRIPT>");

   }

   if(isset($_POST['submitcanon'])) 
{


       $allowedCompressedType = array("image/jpeg", "image/jpg", "image/jpeg", "image/png");


       if(in_array($_FILES["image"]["type"], $allowedCompressedType) && $_FILES["image"]["size"] > 0)
		{
			 $c_model=$_POST['c_model'];
			  $c_type=$_POST['c_type'];  
			  $c_colour=$_POST['c_colour'];
			  $c_ds=$_POST['c_ds'];
			  $c_price=$_POST['c_price'];

			$location=$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/canon/" . $_FILES["image"]["name"]);




			$sql="INSERT into canon(c_model, c_type,c_colour, c_ds, c_price, cimage_location) values ('$c_model','$c_type','$c_colour','$c_ds', '$c_price', '$location')";
      	     $sql_check = mysql_query ( $sql) or die ("Query failed");

			if(!$sql_check)
				echo "SQL ERROR";

			else {
				echo "<script> alert('image succesfully update!');
				window.location= 'addcanon.php'</script>";
			}
		}
		else 
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				    window.alert('File type does not support. Please try again. Thank you')
				    window.location.href='addcanon.php'
				    </SCRIPT>");

   }
 
?> 
