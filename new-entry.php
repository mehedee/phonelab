<!DOCTYPE html>
<html>
<head>
	<title>Phone Test</title>
	<link rel="stylesheet" type="text/css" href="all.css">

</head>
<body bgcolor='white'>
	<div align="center">
		<h1> <u>Enter Specification </u></h1>


		<form action="process.php" method="post"> 
			
			<table border="0">
		
				<tr>
					<td>Brand: </td> 
					<td><input type="text" name="brand" placeholder="Nokia, Samsung etc."></td> 
					<td>||</td>
					<td>Name:  </td> 
					<td><input type="text" name="model" placeholder="e.g. Galaxy S4"></td> 
				</tr>

				<tr>
					<td>Release Date: </td> 
					<td> <input type="text" name="rlz" placeholder="Select the date from calender"> </td>
					<td>||</td>
					<td> Display Size: </td> 
					<td> <input type="number " name="dsize" placeholder="Enter a value manually"> </td>
				</tr>

				<tr>
					<td> Display Resolution:</td> 
					<td> <input type="text" name="dres" placeholder="e.g. 1280x720"> </td>
					<td>||</td>
					<td> Display Density:</td> 
					<td> <input type="text" name="dppi" planceholder="e.g. 244"> </td>
				</tr>

				
				<tr>
					<td> Processor Model: </td> 
					<td> <input type="text" name="proname" placeholder="e.g. Cortex A15"> </td>
					<td>||</td>
					<td> Number of Processor: </td> 
					<td> <input type="text" name="pronum" placeholder="e.g. 2"> </td>
				</tr>


				<tr>
					<td> GPU Model </td> 
					<td> <input type="text" name="gpu" placeholder="e.g. Adreno 225"> </td>
					<td>||</td>
					<td> RAM (in Gigabyte)</td> 
					<td> <input type="text" name="ram" placeholder="e.g. 1.0"> </td> 
				</tr>

				<tr>
					<td> OS Platform </td> 
					<td> <input type="text" name="os" placeholder="e.g. Android"> </td>
					<td>||</td>
					<td> OS Name/Model</td> 
					<td> <input type="text" name="osmodel" placeholder="e.g. Jelly Bean, 4.2.2"> </td> 
				</tr> 

				<tr>
					<td> Camera Primary: </td>
					<td> <input type="text" name="camera_primary"></td>
					<td>||</td>
					<td> Camera Secondary:</td>
					<td><input type="text" name="camera_secondary"></td>
				</tr>


			</table>

			<br><br> <input type="submit"> <input type="reset"> <!-- Submit Button -->
		
		</form>
	</div>
</body>
</html>