<?php include('config.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
body{
	background-image:url(5-Things-Every-Successful-Entrepreneur-Do.jpg);
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;
	color:#F54919;}
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
  <li><a href="adminaddcar.php" >Cars</a></li>
  <li><a href="adminupdate.php">Edit Admin Credentials</a></li>
  <li><a class="active">Drivers</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<?php
$sql="SELECT * FROM driver";
$execute=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($execute)>0){
	echo "No of records found: ".mysqli_num_rows($execute);
	?><table border="1" height="10" cellpadding="5" align="center" bordercolor="#F7EBEC">
    <thead>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Street</th>
    <th>Locality</th>
    <th>City</th>
    <th>State</th>
    <th>Pin</th>
    <th>Mobile</th>
    <th>License</th>
    <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_array($execute)){?>
    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['street']?></td>
    <td><?php echo $row['locality']?></td>
    <td><?php echo $row['city']?></td>
    <td><?php echo $row['state']?></td>
    <td><?php echo $row['pin']?></td>
    <td><?php echo $row['mobile']?></td>
    <td><?php echo $row['license']?></td>
    <td><img src="<?php echo $row['image']?>" width="300px"></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
	    <p align="right"><a href="driverupload.php"><img src="add-button-png-hi.png" height="100px"></a></p>

	<?php
}else{
	echo 'No data found';
}
?>
</body>
</html>