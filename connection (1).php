<?php

$servername="localhost";
$username="root";
$password="";
$dbname="my_project";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "List of Invitation";
}
else
{
echo"Connection failed";
}	

?>
