<?php include('config.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
* {
	box-sizing:border-box;
	
}	
.img-container{
	float:left;
	width:33.33%;
	padding:5px;
	
}
.clearfix::after{
	content:"";
	clear:both;
	display:table;
}
</style>
</head>	
<body>
<h1 align="center">SELECT CAR</h1>

<?php
$sql="SELECT * FROM vehicle";
$execute=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($execute)>0){
	echo "No of records found: ".mysqli_num_rows($execute);
	 while($row=mysqli_fetch_array($execute)){?>
     <div class="clearfix">
     <div class="img-container">
    <img src="<?php echo $row['image'] ?>" style="width:100%">
    <?php echo $row['name'] ?>
    <?php echo $row['type'] ?>
    <?php } ?>
    <?php } else{
		echo 'No vehicles found';
	}
	?>
</div>
</div>
</body>
</html>
