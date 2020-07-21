<?php
	$atype = $_POST['atype'];
	$fname = $_POST['fname'];
	$mname = $_POST['lname'];
	$lname = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$gname = $_POST['f/gname'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
    $work = $_POST['work'];
	$password = $_POST['pass'];
	$pan = $_POST['pan'];
	$aadhar = $_POST['aadhar'];

$conn=new mysqli("localhost","root","","sample");
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}

$sql="INSERT INTO new_user VALUES('$atype','$fname','$mname','$lname','$gender','$dob','$gname','$address','$mobile','$email','$work','$password','$pan','$aadhar')";
if($conn->query($sql)===true)
	 echo "1 Row Inserted";
else
	echo "Insert Error:".$conn->error;
?>