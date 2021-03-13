<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	include ('config.php');
	$name=$_POST['name'];
	$source=$_POST['src'];
	$destination=$_POST['dst'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$car=$_POST['car'];
	$driver="SELECT * FROM vehicle WHERE name='$car'";
$exec=mysqli_query($con,$driver) or die(mysqli_error($con));
$row=mysqli_fetch_array($exec);
$dr=$row['driver'];
	$sql="INSERT INTO reservation VALUES('0','$name','$source','$destination','$date','$time','$car','0','0','$dr')";
	$exec=mysqli_query($con,$sql) or die(mysqli_error($con));

$distance="SELECT * FROM routes WHERE source='$source' AND destination='$destination'";
$fpkm="SELECT * FROM vehicle WHERE name='$car'";
$exec=mysqli_query($con,$distance) or die(mysqli_error($con));
$row=mysqli_fetch_array($exec);
$d=$row['distance'];
$exec=mysqli_query($con,$fpkm) or die(mysqli_error($con));
$row=mysqli_fetch_array($exec);
$f=$row['farepkm'];
$gst=0.18;
$fare=$d*$f;
$cgst=$fare*$gst;
$total=$fare+$cgst;
}
?>
<?php
include ('config.php');
$sql= "UPDATE reservation SET distance=$d,fare=$total WHERE driver='$dr'" ;
	mysqli_query($con, $sql);
	?>
<?php include('config.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CHECKOUT</title>
</head>
<style>
body{
	background-image:url(Euro-Money-Currency-HD-Images.jpg);
	color:yellow;
	background-repeat:no-repeat;
	background-attachment:fixed;
	}
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
<h1 align="center"> BILLING DETAILS </h1>
<?php
$checkout="SELECT * FROM reservation WHERE driver='$dr'";
$exec=mysqli_query($con,$checkout) or die(mysqli_error($con));
$row=mysqli_fetch_array($exec);?>
<div style="font-size:18px">
<p align="center"> Name : <?php echo $row['name']?></p>
<p align="center"> Source : <?php echo $row['source']?></p>
<p align="center"> Destination : <?php echo $row['destination']?></p>
<p align="center"> Date : <?php echo $row['date']?></p>
<p align="center"> Time : <?php echo $row['time']?></p>
<p align="center"> Car : <?php echo $row['car']?></p>
<p align="center"> Distance : <?php echo $row['distance']?> km</p>
<p id="fr" align="center"> Fare : RS. <?php echo $row['fare']?> </p>
<p align="center"> Driver : <?php echo $row['driver']?> </p>
<p align="center"><a href="payment.php"><input type="submit" value="Confirm>"></a></p>
</div>
</body>
</html>