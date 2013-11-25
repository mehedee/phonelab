<!DOCTYPE html>
<html>
<head>
	<title>Phone Test</title>
	<link rel="stylesheet" type="text/css" href="all.css">

</head>
<body bgcolor='white'>

<?php  
	$selected=$_GET['model'];
	$con=mysqli_connect("localhost","phonelab","y82wDdV9a9","phonelab_input");

			if (mysqli_connect_errno()){
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 	}

	$size = mysqli_query($con,"SELECT * FROM `phones` WHERE `model` = '$selected'");
	//var_dump($size);
?>

	<div align="center">
		<h1> <u>Enter Specification </u></h1>

		<form action="update.php" method="post"> 
			
			<table border="0">
			<?php 
				while($row = mysqli_fetch_array($size))		  { 

			?>
		
				<tr>
					<td>Brand: </td> 
					<td><input type="text" name="brand" value="<?php  echo $row['brand'];  ?>"></td> 
					<td>||</td>
					<td>Name:  </td> 
					<td><input type="text" name="model" value="<?php  echo $row['model'];  ?>" disabled ></td> 
				</tr>

				<tr>
					<td>Release Date: </td> 
					<td> <input type="text" name="rlz" value="<?php echo $row['rlz'];  ?>"> </td>
					<td>||</td>
					<td> Display Size: </td> 
					<td> <input type="number " name="dsize" value="<?php  echo $row['dsize'];  ?>"> </td>
				</tr>

				<tr>
					<td> Display Resolution:</td> 
					<td> <input type="text" name="dres" value="<?php  echo $row['dres'];  ?>"> </td>
					<td>||</td>
					<td> Display Density:</td> 
					<td> <input type="text" name="dppi" value="<?php  echo $row['dppi'];  ?>"> </td>
				</tr>

				
				<tr>
					<td> Processor Model: </td> 
					<td> <input type="text" name="proName" value="<?php  echo $row['proName'];  ?>"> </td>
					<td>||</td>
					<td> Number of Processor: </td> 
					<td> <input type="text" name="proNum" value="<?php  echo $row['proNum'];  ?>"> </td>
				</tr>


				<tr>
					<td> GPU Model </td> 
					<td> <input type="text" name="gpu" value="<?php  echo $row['gpu'];  ?>"> </td>
					<td>||</td>
					<td> RAM (in Gigabyte)</td> 
					<td> <input type="text" name="ram" value="<?php  echo $row['ram'];  ?>"> </td> 
				</tr>

				<tr>
					<td> OS Platform </td> 
					<td> <input type="text" name="os" value="<?php  echo $row['os'];  ?>"> </td>
					<td>||</td>
					<td> OS Name/Model</td> 
					<td> <input type="text" name="osmodel" value="<?php  echo $row['osmodel'];  ?>"> </td> 
				</tr> 

				<tr>
					<td> Camera Primary: </td>
					<td> <input type="text" value="<?php  echo $row['camera_primary'];  ?>"></td>
					<td>||</td>
					<td> Camera Secondary:</td>
					<td><input type="text" name="camera2" value="<?php  echo $row['camera_secondary'];  ?>"></td>
				</tr> <?php } ?>


			</table>

			<br><br> <input type="submit"> <input type="reset"> <!-- Submit Button -->
		
		</form>
	</div>
</body>
</html>