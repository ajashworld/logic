<?php 
session_start();
setcookie('visited', "", time() - 3600)
?>


<!DOCTYPE html>
<html>
<head>
	<title>php training</title>
	<style type="text/css">
		body {font-family: verdana;}
		.php {width: 900px; margin: 0 auto; background-color: #ddd;}
		.phpheader, .phpfooter {background-color: #FB8637; color: #fff; text-align: center; padding: 20px;}
		.phpheader h2, .phpfooter h2 {margin: 0;}
		.mainsection {min-height: 400px; padding: 20px;}
	</style>

</head>
<body>
<div class="php">
	<section class="phpheader">
		<h2><?php echo "PHP Fundamentals"; ?></h2>
	</section>
	<section class="mainsection">
	<?php 
		echo "<h2>Fetch values from Data base and store in array</h2>";
		echo "<hr>";

		include 'connect.php';

		echo "<h2>Using while loop</h2>";
		$sql = "SELECT * FROM student";
		$result = $conn->query($sql);
		$array = array();
		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		 $array[] = $row;
    		}
		} else {
    		echo "0 results";
		}

		echo "<pre>";
		print_r($array);
		echo "</pre>";

		echo "<h2>Using for each loop</h2>";
		echo "<hr>";

		foreach ($result as $key => $value) {
			# code...
			$array1[] = $value;
		}

		echo "<pre>";
		print_r($array1);
		echo "</pre>";

		$x = $array;
		echo $x[0]['name'];

		?>
			<table>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Class</th>
					<th>Address</th>
				</tr>
				<tbody>

		<?php

		for ($i=0; $i < count($x); $i++) { 
			
				# code...
				/*echo $x[$i]['id'];
				echo $x[$i]['name'];
				echo $x[$i]['class'];
				echo $x[$i]['address'];*/

				?>
							<tr>
								<td><?php echo $x[$i]['id']; ?></td>
								<td><?php echo $x[$i]['name']; ?></td>
								<td><?php echo $x[$i]['class']; ?></td>
								<td><?php echo $x[$i]['address']; ?></td>
							</tr>
						

				<?php

			
			
		}
		?>
		</tbody>
	</table>
	<?php


		$conn->close()
	

		

		
	?>
	
	<a href="#">White Space</a>
	</section>
	<section class="phpfooter">
		<h2><?php echo "Learning PHP"; ?></h2>
	</section>
</div>
</body>
</html>