<?php
 $query = "SELECT * from Customers ORDER BY CLastName"; //query to get all customers ordered by last name
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }

echo "<table><tr><th>CustomerID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Phone Number</th><th>Agent ID</th>";
 while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>".$row["CustomerID"]."</td>";
        echo "<td>".$row["CFirstName"]."</td>";		//print table of result
        echo "<td>".$row["CLastName"]."</td>";
        echo "<td>".$row["CCity"]."</td>";
	echo "<td>".$row["PhoneNumber"]."</td>";
	echo "<td>".$row["AgentID"]."</td>";

        echo "</tr>";
}
echo "</table>";
 mysqli_free_result($result);
?>
