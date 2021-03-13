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
	color:yellow;
	background-repeat:no-repeat;
	background-attachment:fixed;}
	li {
    float: left;
	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
</style>
<body>
<ul>
  <li><a href="afterlogin.php">Home</a></li>
  <li><a href="VC.php">Cars</a></li>
  <li><a  class="active">Booking</a></li>
  <li><a href="#about">Edit Profile</a></li>
  <li><a href="homepage.php">Logout</a></li>
</ul>
<br>
<br>
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
    <p align="right"><a href="reservation.php"><img src="book-now-button.png" ></a></p>
	<?php
}else{
	echo 'No data found';
}
?>
</body>
</html>