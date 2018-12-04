<?php
 $query = "SELECT Description from Products WHERE Products.ProductID NOT IN (SELECT ProductID FROM Purchased)";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
	if($row['Description']==''){
		
	}
	else{
        	echo $row['Description'];
		echo '<br>';
	} 
}
 mysqli_free_result($result);
?>
