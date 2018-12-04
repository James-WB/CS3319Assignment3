
<!DOCTYPE html>
<html>
<head>
	<?php
		include 'connecttodbAssignment3.php'	//connect to database
	?>

        <title>Customers and Purchases</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">			<!--Title and Style-->
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

</head>
<body>

<h1>Customers and Purchases</h1>
<br>
<hr>
<div class="btn-group">

	<button onclick="window.location.href='CustomerDatabase.php'">Customer Database</button>
        <button onclick="window.location.href='NewPurchase.php'">Insert New Purchase</button>
        <button onclick="window.location.href='InsertNewCustomer.php'">Insert a New Customer</button>		<!--Buttons for other features-->
        <button onclick="window.location.href='UpdateCustomer.php'">Update Phone Number</button>
        <button onclick="window.location.href='DeleteCustomer.php'">Delete Customer</button>
        <button onclick="window.location.href='SpecificQuantity.php'">Customers who Bought Specific Quantity of Product</button>	

</div>
<hr>
<h4>Customers who Bought More than than Specific Quantity of any Product:</h4>
<?php											//Database query to get all customers who bought more than a specific quantity
        $query = "SELECT Customers.CustomerID, Customers.CFirstName, Customers.CLastName, Products.Description, Purchased.QuantityPurchased FROM Customers INNER JOIN Purchased ON Customers.CustomerID = Purchased.CustomerID INNER JOIN Products ON Purchased.ProductID = Products.ProductID WHERE Purchased.QuantityPurchased > '".$_GET['Quantity']."'";
        $result = mysqli_query($connection,$query);
        if (!$result) {
        	die("databases query failed.");
        }

 echo "<table><tr><th>CustomerID</th><th>First Name</th><th>Last Name</th><th>Description</th><th>Quantity Purchased</th>";
 while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>".$row["CustomerID"]."</td>";
        echo "<td>".$row["CFirstName"]."</td>";
        echo "<td>".$row["CLastName"]."</td>";		//Dispayed in table
        echo "<td>".$row["Description"]."</td>";
        echo "<td>".$row["QuantityPurchased"]."</td>";

        echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);	
?>

</body>
</html>
