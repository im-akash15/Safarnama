<?php
include('config.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Routes</title>
</head>

<body>
<form action="adminregcon.php" method="post">
<table>
<tr>
<td>Id:</td>
</tr>
<tr>
<td>Source</td>
<td><input type="text" name="src"></td>
</tr>
 <tr>
<td>Destination</td>
<td><input type="text" name="dst">
</td>
</tr>
<tr>
<td>Distance</td>
<td><input type="text" name="dstn">
</td>
</tr>
<tr>
<td><input type="submit" name="Submit"></td></tr>
</table>
</form>
</body>
</html>