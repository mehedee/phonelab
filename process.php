<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="all.css">
	<style>
	h2{ color: grey; text-align: center;}
	div{text-align: center; margin-top: 200px; font-size: 20px;}
	</style>
</head>
<body>
<div>
<?php
$con=mysqli_connect("localhost","phonelab","y82wDdV9a9","phonelab_input");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO phones (brand, model, rlz, dsize, dres, dppi, proname, pronum, gpu, ram, os, osmodel, camera_primary, camera_secondary)
VALUES
('$_POST[brand]','$_POST[model]','$_POST[rlz]', '$_POST[dsize]', '$_POST[dres]', '$_POST[dppi]', '$_POST[proname]', '$_POST[pronum]', '$_POST[gpu]', '$_POST[ram]','$_POST[os]','$_POST[osmodel]','$_POST[camera_primary]','$_POST[camera_secondary]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "<h2>Specification Stored in Database Successfully!</h2>";


mysqli_close($con);
?>

<a href="/all.php"><b>View</a> || <a href="/index.html">Home</a> || <a href="/new-entry.php">Add Another</a>

</div>
</body>
</html>
