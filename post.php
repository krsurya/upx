<?php
$name=$_POST['usr'];
$email=$_POST['emailid'];
$mbno=$_POST['mbno'];
$con=mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno())
  {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
// Create database
$sql="CREATE DATABASE upx";
mysqli_query($con,$sql);

$sql="CREATE TABLE Reg(name CHAR(30),emailid VARCHAR(30),mbno VARCHAR(30))";
$we=mysqli_select_db($con,"upx");
// Execute query
if ($we)
  {
 // echo "Table persons created successfully";
	$sq=mysqli_query($con,$sql);
  }
	$insert=mysqli_query($con,"INSERT INTO Reg (name,emailid,mbno)
	VALUES ('$name','$email','$mbno')");
if($insert)
{
		echo '<script>alert("Your account is Succesfully Created!!"); parent.location.href="index.html";</script>';
		
}
else
{
echo "already regiterd for this id";
//header('')
}

mysqli_close($con);
?> 
