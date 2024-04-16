<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
		button.btn{
  padding: 5px;

  transition: transform .2s;
  background-color: #e7e7e7; color: black;
  margin: 0 auto;
border-radius: 8px;
  display: inline-block;
}

.btn:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
		body{
			  background-image: url('background-image.jpg');
		}

	</style>
</head>
<body>

<!-- declearation Part of servername,username,password,dbname -->
<?php
$sever ="localhost";
$username ="root";
$password ="";
$dbname ="ishaque";

//connection create.
$con = mysqli_connect("localhost", "root","","ishaque");

//connection check.
if(!$con)
{
	die("not connected: ".mysqli_connect_error());
}

//insert data.
error_reporting(0);
$email =$_POST['email'];
$username =$_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

//insert into table.
$sql = "INSERT INTO tables(email, username, password, confirm_password) VALUES ('$email','$username','$password','$confirm_password')";

//Final Result.
$result = mysqli_query($con, $sql);
if ($result)
{
	echo "<br><br><br><center><h2>Account Created Successfully.</h2></center><br><br>";
}
else
{
	echo "<br><br><br><center><h3>Account failed To Create</h3></center><br><br>".mysqli_error($con);
}
?>

<!--Button Createation -->
<center><h3><button class="btn"><a href='index.html'>Back To Home</a></button></h3><center>
</body>
</html>