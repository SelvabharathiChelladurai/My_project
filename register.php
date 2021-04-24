<?php

session_start();
header('location:register.html');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'my_project');

$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$phone = $_POST['phone'];
$date = $_POST['date'];

$s= "select * from register where user= '$user'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
	$reg=" insert into register(username, email, password1, password2, phone, date) values ('$username' ,'$email','$password1','$password2','$phone','$date')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}
?>
