<?php include('config.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vehicle</title>
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
<h1>Add New Driver</h1>
<form action="driveruploadcon.php" method="post">
<table>

<tr>
<td>Name</td>
<td><input type="text" name="name" maxlength="30"></td>
</tr>
<tr>
<td>Street</td>
<td><input type="text" name="strt" ></td>
</tr>
<tr>
<td>Locality</td>
<td><input type="text" name="lcl"></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city"></td>
</tr>
<tr>
<td>State</td>
<td><input type="text" name="state"></td></tr>
<tr>
<td>Pin</td>
<td><input type="number" name="pin" min="10" maxlength="10">
</td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="number" name="mob" min="10" maxlength="10"></td>
</tr>
<tr>
<td>License Number</td>
<td><input type="text" name="license"></td>
</tr>
<tr>
<td>Upload Driver Image</td>
<td><input type="file" name="img"></td></tr>
<tr>
<td>
<input type="submit" name="Add">
</td>
</tr>
</table>
</form>
<?php
if(isset($_GET['done'])){
	echo "<p 
	style='color:green;
	background-color:lightyellow'>
	Data Saved Successfully</p>";
}
?>
</body>
</html>
</body>
</html>