<?php
session_start();
?>
<?php
require ('sql_connect.php');
if (isset($_POST['submit'])){
$id=mysql_escape_string($_POST['id']);
$password=mysql_escape_string($_POST['password']);
if (!$_POST['id'] | !$_POST['password'])
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('You did not complete all of the required fields')
 window.location.href='login.html'
 </SCRIPT>");
exit();
 }
$sql= mysql_query("SELECT * FROM admin WHERE id = '$id' AND password =
'$password'");
if(mysql_num_rows($sql) > 0)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Login Succesfully!.')
 window.location.href='homepagehp.php'
 </SCRIPT>");
 $_SESSION['id']=$id;
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Wrong username password combination.Please re-enter.')
 window.location.href='login.html'
 </SCRIPT>");
exit();
}
}
else{
}
?>
