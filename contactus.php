<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	include ('config.php');
	$id=$_POST['id'];
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$msg=$_POST['Message'];
	$sql="INSERT INTO contactus VALUES('0','$name','$email','$msg')";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($exec==1){
		header('location:homepage.php?done=true');
	}
}else{
	echo 'Forbidden Access';
}?>