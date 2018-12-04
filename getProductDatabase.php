<?php
 $query = "SELECT * from Products ORDER BY CostPerItem";	//query to get products table
 $result = mysqli_query($connection,$query);
 if (!$result) {
	 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
 	echo $row['CostPerItem'];
	echo ', ';
 	echo $row['ProductID'];			//display results in table
	echo ', ';
 	echo $row['Description'];
	echo ', ';
	echo $row['QuantityInStock'];
	echo "<br>";
 }
 mysqli_free_result($result);
?>
