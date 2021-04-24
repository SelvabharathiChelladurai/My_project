<?php

session_start();
header('location:form.html');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'my_project');

$invite = $_POST['invite'];
$date = $_POST['date'];
$day = $_POST['day'];
$fees = $_POST['fees'];
$firstprize = $_POST['firstprize'];
$provider1 = $_POST['provider1'];
$secondprize = $_POST['secondprize'];
$provider2 = $_POST['provider2'];
$thirdprize = $_POST['thirdprize'];
$provider3 = $_POST['provider3'];
$fourthprize = $_POST['fourthprize'];
$provider4 = $_POST['provider4'];


$s= "select * from publish where invite= '$invite'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	echo" This Invitation is already given in live";
}else{
	$reg=" insert into publish(invite, date, day, fees, firstprize, provider1,secondprize,provider2,thirdprize,provider3,fourthprize,provider4) values ('$invite' ,'$date','$day','$fees','$firstprize','$provider1','$secondprize','$provider2','$thirdprize','$provider3','$fourthprize','$provider4')";
	mysqli_query($con, $reg);
	echo"Invitation submitted Successful";
}
?>
