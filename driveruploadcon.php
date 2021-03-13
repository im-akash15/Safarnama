<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	include ('config.php');
	$id=$_POST['id'];
	$name=$_POST['name'];
	$street=$_POST['strt'];
	$locality=$_POST['lcl'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$mobile=$_POST['mob'];
	$license=$_POST['license'];
	$img=$_POST['img'];
	$sql="INSERT INTO driver VALUES('0','$name','$street','$locality','$city','$state','$pin','$mobile','$license','$img','1')";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($exec==1){
		header('location:driverupload.php?done=true');
	}
}else{
	echo 'Forbidden Access';
}
?>