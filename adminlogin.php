<?php include('config.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin login</title>
</head>
<style>
body{background-color:#993300;}
h1{color:lightyellow;
text-decoration:underline;}
h2{color:lightyellow;}
body{color:#F0F0F0;
background-image:url(UMMn2aC-black-car-wallpaper.jpg)
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
<body>
<ul>
  <li><a href="homepage.php">Home</a></li>
</ul>
<h1 style="font-family:'Book Antiqua'" align="center">
Admin Login
</h1>
<h2 style="font-family:'Comic Sans MS'" align="center">
Enter Your Login Details
</h2>
<form id="loginForm" name="loginForm" method="post">
  <table width="700" border="3" align="center" cellpadding="2" cellspacing="0" style="font-family:'Comic Sans MS'">
    <tr>
      <td width="112"><b>User id (Email-id)</b></td>
      <td width="188"><input name="user_email" type="text" class="textfield" id="login"/></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td> </td>
      <td><input type="submit" name="login" value="login" /></td>
    </tr>
  </table>
</form>
<?php if(isset($_POST['login'])){
	$email=$_POST['user_email'];
	$password=$_POST['password'];
	if(empty($_POST)){
		die("all fields are required!");}
		$verify=mysqli_query($con,"SELECT * FROM admin WHERE Email='$email' AND pwd='$password'") or die (mysqli_error($con));
		if(mysqli_num_rows($verify)==1){
			session_start();
			$_SESSION['user']=NULL;
			$userData=mysqli_fetch_array($verify);
			$_SESSION['user']=$userData;
			header('location:adminpage.php');
			exit;
		}else{
			echo "<p style='color:red'>Invalid user name or password</p>";
		}
}?>
</body>
</html>
</body>
</html>