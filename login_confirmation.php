<?php
 
 session_start();
$db_name="mydepartment";
$mysql_username="root";
$mysql_password="";
$server_name="localhost";

$conn=mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);

if($conn)
	echo " successfully connected";
else
	echo " not connected";
	
$name=$_POST["username"];
$pass=$_POST["password"];


  $sql="select * from usertable where username='$name';";
  $sql2="select * from usertable where username='$pass';";
  
  $result=mysqli_query($conn,$sql);
  $result2=mysqli_query($conn,$sql2);
  $num=mysqli_num_rows($result);
  
  if($num==1)
  {
	  echo "ok u are login ";
  }
  else
  {
	  
	  echo "sorry";
  }
	

?>