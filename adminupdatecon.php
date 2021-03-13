<?php if($_SERVER['REQUEST_METHOD']==="POST"){
	include('config.php');
	$uname=$_POST['u'];
	$opd=$_POST['op'];
	$npd=$_POST['np'];
	$sql="SELECT * FROM admin WHERE username='$uname'";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
	$row=mysqli_fetch_array($exec);
	
	$un=$row['username'];
$sql="UPDATE admin SET pwd=$npd WHERE username='$un'";
mysqli_query($con,$sql);
header('location:adminpage.php');
	
}
?>
