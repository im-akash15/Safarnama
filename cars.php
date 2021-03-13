<?php include('config.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vehicle</title>
</head>
<style>
body{
	background-image:url(113251.jpg);
	color:white;
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;}
	h1
	{
		color:#993300;
	}
	table
	{
		font-size:25px;
	
		
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
  <li><a href="adminpage.php">Home</a></li>
  <li><a class="active" >Cars</a></li>
  <li><a href="#about">Edit Admin Credentials</a></li>
  <li><a href="homepage.php">Logout</a></li>
</ul>
<h1 align="center">Add New Vehicle</h1>
<br>
<br>
<form action="vehicle.php" method="post">
<table align="center">
<tr>
<td>Name</td>
<td><input type="text" name="name" maxlength="30"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="type" ></td>
</tr>
<tr>
<td>Registration_No:</td>
<td><input type="text" name="reg"></td>
</tr>
<tr>
<td>Fare Per Kilometer:</td>
<td><input type="text" name="farepkm"></td>
</tr>
<tr>
<td>Upload vehicle image</td>
<td><input type="file" name="img"></td></tr>
<td>Assign Driver:</td>
<td><select name="dr">
<option value="select driver">select driver</option>
<?php
$sql="SELECT * FROM driver WHERE status=1";
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

</form>
<p align="center"><a href="adminaddcar.php"><img src="add-button-png-hi.png" height="70px"></a></p>
</body>
</html>
