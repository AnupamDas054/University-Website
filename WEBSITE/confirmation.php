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
$e_name=$_POST["email"];

  $sql="select * from usertable where username='$name';";
  
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  
  if($num==1)
  {
	  echo "Username already taken";
  }
  else
  {
	  $reg="insert into usertable(username,email,password) values ('$name','$pass','$e_name');";
	  mysqli_query($conn,$reg);
	  echo "ok successfully connected";
  }
	

?>