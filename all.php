<!DOCTYPE html>
<html>
<head>
	<title>All Phones</title>
	<link rel="stylesheet" type="text/css" href="all.css">
	
</head>
<body id="indexbody">
<div class="divview">
<?php
	$con=mysqli_connect("localhost","phonelab","y82wDdV9a9","phonelab_input");

		if (mysqli_connect_errno()){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 }

	$size = mysqli_query($con,"SELECT * FROM phones ORDER BY brand");

	echo "<table border='1' >
		<tr>
		<th width=80px, height=40px;></th>
		<th width=180px>Brand</th>
		<th width=180px>Model</th>
		</tr>";

		$counter=0;
		while($row = mysqli_fetch_array($size))		  {
		  echo "<tr height= 30px;>";
		  echo "<td>" . $counter=$counter+1 . "</td>";
		  echo "<td>" . $row['brand'] . "</td>";
		  echo "<td>" . $row['model'] . "</td>";
		  echo '<td> <a href="detail.php?model=' .$row["model"] . '"> Details</a> || <a href="edit.php?model=' .$row["model"] . '"> Edit </a> </td>';
		  echo "</tr>";
		 }
	echo "</table>";
	echo "Total " . $counter . " phone(s) listed so far.";

mysqli_close($con);
?>

</div>
</body>
</html>