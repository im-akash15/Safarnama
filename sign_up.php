<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="awfont.css">
<title>User sign up</title>
</head>
<style>
body{
	background-image:url(3994282-hd-car-wallpaper.jpg);
	color:#FFA500;
	font-family: "Lato", sans-serif;
	}
h1{text-decoration:underline;}
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
<li><a   href="homepage.php">Home</a></li>
  <li><a href="VC.php">Cars</a></li>
  <li><a class="active">Sign Up</a></li>
  <li><a href="userlogin.php">Login</a></li>
</ul>
  <br>
<h1>
Create your new account
</h1>
<form action="user_data.php" method="post">
<table>
<tr>
<td>First Name :</td>
<td><input type="text" name="fn" maxlength="30" required></td>
</tr>
<tr>
<td>Last Name :</td>
<td><input type="text" name="ln" maxlength="30" required></td>
</tr>
<tr>
<td>Date of Birth :</td>
<td><input type="date" name="dob" required></td>
</tr>
<tr>
<td>Gender :</td>
<td><input type="radio" name="gender" value="male" checked="checked">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="others">Others</td>
</tr>
<tr>
<td>Street :</td>
<td><input type="text" name="strt" maxlength="50" required></td>
</tr>
<tr>
<td>Location :</td>
<td><textarea name="loc" required></textarea></td>
</tr>
<tr>
<td>City :</td>
<td><select name="ct" required>
<option value="select city">select city</option>
<option value="kolkata">Delhi</option>
<option value="durgapur">Durgapur</option>
<option value="delhi">Kolkata</option>
<option value="mumbai">Mumbai</option>
<option value="patna">Patna</option>
<option value="ranchi">Ranchi</option>
</select></td>
</tr>
<tr>
<td>State :</td>
<td><select name="st" required>
<option value="select state">select state</option>
<option value="bihar">Bihar</option>
<option value="jharkhand">Jharkhand</option>
<option value="maharashtra">Maharashtra</option>
<option value="wb">West Bengal</option>
</select></td>
</tr>
<tr>
<td>Pin :</td>
<td><input type="number" name="pin" maxlength="6" required/></td>
</tr>
<tr>
<td>Mobile :</td>
<td><input type="number" name="mob" maxlength="10" required></td>
</tr>
<tr>
<td>E-mail :</td>
<td><input type="email" name="em" required></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="pwd" required></td>
<td><input type="image" src="Sign-up-now-button.png" width="200" height="100"></td>
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
