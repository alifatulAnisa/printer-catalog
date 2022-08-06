<?php
session_start();
?>
<?php
 
include ("sql_connect.php"); 

$sql="SELECT * FROM hp";
$result = mysql_query($sql) or die('Query failed. ' . mysql_error());

$hp_model='';
$hp_type='';



	if (isset($_GET['edit'])) {
			$hp_id=$_GET['edit'];
	        $sql="SELECT * FROM hp WHERE hp_id='$hp_id'";
	        $query=mysql_query($sql);
	        $row=mysql_fetch_array($query);
	} else {
	  echo "Something went wrong!";
	  exit;
	}
		
?>