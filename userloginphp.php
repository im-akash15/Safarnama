<?php include('config.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User login</title>
</head>
<style>
h1{color:lightyellow;
text-decoration:underline;}
h2{color:lightyellow;}
body{color:;
background-image:url(free-desktop-hd-cars-wallpapers-downlaod.jpg)
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	size:50%;
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
  <li><a href="homepage.php">Home</a></li>
</ul>
<h1 style="font-family:Forte" align="center">
User Login
</h1>
<h2 style="font-family:'Comic Sans MS'" align="center">
Enter Your Login Details
</h2>
<form id="loginForm" name="loginForm" method="post">
  <table width="700" border="3" align="center" cellpadding="2" cellspacing="0" style="font-family:'Comic Sans MS'">
    <tr>
      <td width="112"><b>User id (Email-id)</b></td>
      <td width="188"><input name="user_email" type="text" class="textfield" id="login" required/></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="pass" type="password" class="textfield" id="password" required/></td>
    </tr>
    <tr>
      <td> </td>
      <td><input type="submit" name="login" value="login" /></td>
    </tr>
  </table>
</form>
</body>
</html>
</body>
</html>