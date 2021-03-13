<?php include('config.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
body{
	background-image:url(Car-Wallpaper-HD.jpg);
	color:yellow;}

</style>
<body>
<?php
$sql="SELECT * FROM vehicle";
$execute=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($execute)>0){
	echo "No of cars found: ".mysqli_num_rows($execute);
	?><table border="1" height="10" cellpadding="5" align="center">
    <thead>
    <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Reg</th>
    <th>Fare per km</th>
    <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_array($execute)){?>
    <tr>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['type']?></td>
    <td><?php echo $row['reg']?></td>
    <td><?php echo $row['farepkm']?></td>
    <td><img src="<?php echo $row['image']?>" width="300px"></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <p align="right" style="size:2px"><a href="driverupload.php"><img src="button_add-512.png"></a></p>
	<?php
}else{
	echo 'No data found';
}
?>
</body>
</html>