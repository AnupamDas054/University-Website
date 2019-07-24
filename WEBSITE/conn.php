<?php

$conn=mysqli_connect('localhost','root','','mydepartment');
if ($conn) {
	
	echo "AMi onukompo";
}
else{
	echo "ami vumi kompo";
}


?>