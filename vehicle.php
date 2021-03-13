<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	include ('config.php');
	$name=$_POST['name'];
	$type=$_POST['type'];
	$reg=$_POST['reg'];
	$farepkm=$_POST['farepkm'];
	$img=$_POST['img'];
	$dr=$_POST['dr'];
	$sql="INSERT INTO vehicle VALUES('0','$name','$type','$reg','$farepkm','$img','$dr')";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	if($exec==1){
		header('location:cars.php?done=true');
	}
}else{
	echo 'Forbidden Access';
}
?>
<?php
include ('config.php');
$sql= "UPDATE driver SET status=0 WHERE name='$dr'" ;
	mysqli_query($con, $sql);
	?>