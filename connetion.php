<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'STUDENT');
if($con)
{
	echo"Database is connected";
}
else{
	echo"Database is not connected";
}

?>