<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	include ('config.php');
	$id=$_POST['id'];
	$src=$_POST['src'];
	$dst=$_POST['dst'];
	$dstn=$_POST['dstn'];
	$sql="INSERT INTO routes VALUES('0','$src','$dst','$dstn')";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($exec==1){
		header('location:adminreg.php?done=true');
	}
}else{
	echo 'Forbidden Access';
}
?>