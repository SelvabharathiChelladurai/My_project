


<html>
<head>
<style>
.box {
  color:white;
}
th,table {
  color:white;
}
</style>
<title>Invitations </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<script type="text/javascript">
		function preventBack(){
		window.history.forward();
		}
		setTimeout("preventBack()",0);
		window.onunload=function(){null};
</script>

</head>
<body>
<div class="container">

	<a class="float-right" href="logout.php"> LOGOUT </a>
	<h1>Welcome </h1>
	<div class="box">
	<table border="2" >
	<tr>
	<th>Invitation Heading</th>
	<th>Date of Event</th>
	<th>Day of Event</th>
	<th>Entrance Fees</th>
	<th>First Prize</th>
	<th>Provider of 1st Prize</th>
		<th>Second Prize</th>
			<th>Provider of 2nd Prize</th>
				<th>Third Prize</th>
					<th>Provider of 3rd Prize</th>	
					<th>Fourth Prize</th>
						<th>Provider of 4th Prize</th>
	</tr>
	</div>
<?php
include("connection.php");
error_reporting(0);
$query="select * from publish";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"
		<tr>
		<th>".$result[invite]."</th>
		<th>".$result[date]."</th>
		<th>".$result[day]."</th>
		<th>".$result[fees]."</th>
		<th>".$result[firstprize]."</th>
		<th>".$result[provider1]."</th>
		<th>".$result[secondprize]."</th>
		<th>".$result[provider2]."</th>
		<th>".$result[thirdprize]."</th>
		<th>".$result[provider3]."</th>
		<th>".$result[fourthprize]."</th>
		<th>".$result[provider4]."</th>
		</tr>
		";
	}
}
?>
</div>
</body>
</html>