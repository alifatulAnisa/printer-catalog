<?php
session_start();
?>
<?php include('sql_connect.php'); 

if(isset($_GET['deletedhp'])) 
{ 
$sql="delete from hp where hp_id='{$_GET['hp_id']}' ";
  $query=mysql_query($sql);
  if($query)
  {
	  {
		  header('Refresh:0; homepagehp.php');      
	  }  
  } 
} 

if(isset($_GET['deletedbrother'])) 
{ 
$sql="delete from brother where b_id='{$_GET['b_id']}' ";
  $query=mysql_query($sql);
  if($query)
  {
	  {
		  header('Refresh:0; homepagebrother.php');      
	  }  
  } 
} 

if(isset($_GET['deletedcanon'])) 
{ 
$sql="delete from canon where c_id='{$_GET['c_id']}' ";
  $query=mysql_query($sql);
  if($query)
  {
	  {
		  header('Refresh:0; homepagecanon.php');      
	  }  
  } 
} 

?>