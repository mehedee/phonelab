<?php
echo $_POST['model'];
$con=mysqli_connect("localhost","phonelab","y82wDdV9a9","phonelab_input");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$size = mysqli_query($con,"SELECT * FROM `phones` WHERE `model` = '$selected'");
echo $selected;
$selected=$_POST['model'];
echo $sql="UPDATE phones SET brand=`$_POST[brand]`, rlz=`$_POST[rlz]`, dsize=`$_POST[dsize]`, dres=`$_POST[dres]`, 
				proName=`$_POST[proName]`, proNum=`$_POST[proNum]`, gpu=`$_POST[gpu]`, ram= `$_POST[ram]`, os=`$_POST[os]`, 
				osmodel=`$_POST[osmodel]`, camera_primary=`$_POST[camera_primary]`, camera_secondary=`$_POST[camera_secondary]` WHERE model='$_POST[model]'" ;

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
  }
  else { echo "<h2>Specification Updated in Database Successfully!</h2>"; 
}


mysqli_close($con);
?>
<a href="/all.php"><b>View</a> || <a href="/index.html">Home</a> 