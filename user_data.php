<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	include ('config.php');
	$First_Name=$_POST['fn'];
	$Last_Name=$_POST['ln'];
	$DOB=$_POST['dob'];
	$Gender=$_POST['gender'];
	$Street=$_POST['strt'];
	$Locality=$_POST['loc'];
	$City=$_POST['ct'];
	$State=$_POST['st'];
	$Pin=$_POST['pin'];
	$Mob=$_POST['mob'];
	$email=$_POST['em'];
	$Password=$_POST['pwd'];
	$sql="INSERT INTO user_profile VALUES('0','$First_Name','$Last_Name','$DOB','$Gender','$Street','$Locality','$City','$State','$Pin','$Mob','$email','$Password')";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($exec==1){
		header('location:sign_up.php?done=true');
	}
}else{
	echo 'Forbidden Access';
}
?>