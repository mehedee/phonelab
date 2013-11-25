<!DOCTYPE html>
<html>
<head>
	<title>All Phones</title>
	<link rel="stylesheet" type="text/css" href="all.css">
	
</head>
<body id="indexbody">
<div class="divview">
<?php
$selected=$_GET['model'];
	$con=mysqli_connect("localhost","phonelab","y82wDdV9a9","phonelab_input");

		if (mysqli_connect_errno()){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 }

	$size = mysqli_query($con,"SELECT * FROM phones WHERE model='$selected' ");
	$row = mysqli_fetch_array($size);

	echo "<h2>Detail Specification of " . $row['brand'] . " " . $row['model'] . "</h2>";
	echo "<table>";		  
		  	echo "<tr> <td> Brand </td> 				<td>" 	. $row['brand'] . "</td> </tr>"; 
			echo "<tr> <td> Model </td> 				<td>" 	. $row['model'] . "</td> </tr>";
			echo "<tr> <td> Platform </td> 				<td>" 	. $row['os'] . "</td> </tr>";
			echo "<tr> <td> Operating System </td> 		<td>" 	. $row['osmodel'] . "</td> </tr>";
			echo "<tr> <td> Release Date </td> 			<td>" 	. $row['rlz'] . "</td> </tr>";
			echo "<tr> <td> Display Size </td> 			<td>"	. $row['dsize'] . "</td> </tr>";
			echo "<tr> <td> Display Resolution </td> 	<td>"	. $row['dres'] . "</td> </tr>";
			echo "<tr> <td> Display Resolution </td> 	<td>" 	. $row['dppi'] . "</td> </tr>";
			echo "<tr> <td> Processor </td> 			<td>" 	. $row['proName'] . "</td> </tr>";
			echo "<tr> <td> Number of Cores </td> 		<td>" 	. $row['proNum'] . "</td> </tr>";
			echo "<tr> <td> Installed RAM </td> 		<td>" 	. $row['ram'] . "</td> </tr>";
			echo "<tr> <td> Graphics Drive </td> 		<td>" 	. $row['gpu'] . "</td> </tr>";
			echo "<tr> <td> Primary Camera </td> 		<td>" 	. $row['camera_primary'] . "</td> </tr>";
			echo "<tr> <td> Secondary Camera </td> 		<td>" 	. $row['camera_secondary'] . "</td> </tr>";
	echo "</table>";
	

mysqli_close($con);
?>

</div>
</body>
</html>