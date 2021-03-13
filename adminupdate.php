<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change admin password</title>
</head>
<style>
body{
	background-image:url(1042359.jpg);
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;
	color:#F54919;}
	table{
		font-size:30px;
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
  <li><a href="adminaddcar.php" >Cars</a></li>
  <li><a class="active">Edit Admin Credentials</a></li>
  <li><a href="driverupload.php">Drivers</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<br>
<br>
<form action="adminupdatecon.php" method="post">
<table>
<tr>
<td>Enter username: </td>
<td><input type="text" name="u"></td>
</tr>
<tr>
<td>Enter old password :</td>
<td><input type="password" name="op"></td>
</tr>
<tr>
<td>Enter new password :</td>
<td><input type="password" name="np"></td>
</tr>
<tr>
<td align="right"><input type="submit" name="submit" value="save changes"></td>
</tr>
</table>
</form>
</body>
</html>