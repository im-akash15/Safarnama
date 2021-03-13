<?php if($_SERVER['REQUEST_METHOD']==="GET"){
 include('config.php');
 $source=$_GET['src'];
 $dest=$_GET['dst'];
 $id=$_GET['id'];
$distance="SELECT * FROM routes WHERE source=$source AND destination=$dest";
$fpkm="SELECT * FROM vehicle WHERE id=$id";
$exec=mysqli_query($con,$distance) or die(mysqli_error($con));
$row=mysqli_fetch_array($exec);
$d=$row['distance'];
$exec=mysqli_query($con,$fpkm) or die(mysqli_error($con));
$row=mysqli_fetch_array($exec);
$f=$row['farepkm'];
$fare=$d*$f;
$gst=$fare*0.18;
$total=$fare+$gst;
echo "total fare :"."$total";
}
?>
