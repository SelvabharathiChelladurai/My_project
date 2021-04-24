<?php

session_start();
header('location:contact.html');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'my_project');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];


$s= "select * from contact where user= '$firstname'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	echo" Sorry... some actions required";
}else{
	$reg=" insert into contact(firstname,lastname, email, subject) values ('$firstname','$lastname' ,'$email','$subject')";
	mysqli_query($con, $reg);
	echo" Will meet you soon...Thank You";
}
?>
