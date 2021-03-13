<?php include ('config.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reservation</title>
</head>
<style>
body{
	background-image:url(na_5a3cfb9e2a48e.jpg);
	color:seagreen;
	background-repeat:no-repeat;
	background-attachment:fixed;
	}
	table{
		font-size:24px;}
	h1{
		font-size:60px;
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
<h1 align="center"><u>Booking Details</u></h1>
<form action="resub.php" method="post">
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Source:</td>
<td><select name="src" required>
<option value="Select Source">Select Source</option>
<option value="KOLKATA">KOLKATA</option>
<option value="MUMBAI">MUMBAI</option>
<option value="DELHI">DELHI</option>
<option value="PATNA">PATNA</option>
<option value="RANCHI">RANCHI</option>
</select>
</td>
</tr>
<tr>
<td>Destination:</td>
<td><select name="dst" required>
<option value="SELECT DESTINATION">Select Destination</option>
<option value="RANCHI">RANCHI</option>
<option value="PATNA">PATNA</option>
<option value="DELHI">DELHI</option>
<option value="MUMBAI">MUMBAI</option>
<option value="KOLKATA">KOLKATA</option>
</select>
</td>
</tr>
<tr>
<td>Date:</td>
<td><input type="date" name="date" required></td>
</tr>
<tr>
<td>Time:</td>
<td><input type="text" name="time" required></td>
</tr>
<tr>
<td>Select car:</td>
<td><select name="car" required>
<option value="select car">select car</option>
<?php
$sql="SELECT * FROM vehicle";
$execute=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($execute)>0){
	while($row=mysqli_fetch_array($execute)){?>
	<option><?php echo $row['name'] ?></option>
    <?php }
}?>
</select>
</td>
</tr>
</table>
<p align="center"><input type="submit" name="submit" value="submit"></a></p>
</form>
</body>
</html>
