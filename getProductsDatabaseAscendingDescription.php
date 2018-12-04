<?php
 $query = "SELECT * from Products ORDER BY Description ASC";	//gets Products table ordered by ascending description
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }

echo "<table><tr><th>ProductID</th><th>Description</th><th>Cost Per Item</th><th>Quantity In Stock</th>";
 while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>".$row["ProductID"]."</td>";
        echo "<td>".$row["Description"]."</td>";	//displayes results in table
        echo "<td>".$row["CostPerItem"]."</td>";
        echo "<td>".$row["QuantityInStock"]."</td>";

        echo "</tr>";
}
echo "</table>";
 mysqli_free_result($result);
?>
