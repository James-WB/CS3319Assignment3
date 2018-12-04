<!DOCTYPE html>
<html>
<head>
        <title>Customers and Purchases</title>				<!--title and style-->
        <link rel="stylesheet" type="text/css" href="assignment3.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

</head>
<body>

<h1>Customers and Purchases</h1>
<br>
<hr>
<div class="btn-group">
        <button onclick="window.location.href='CustomerDatabase.php'">Customer Database</button>
	<button onclick="window.location.href='NewPurchase.php'">Insert New Purchase</button>		<!--buttons for other features-->
        <button onclick="window.location.href='InsertNewCustomer.php'">Insert a New Customer</button>
        <button onclick="window.location.href='UpdateCustomer.php'">Update Phone Number</button>
        <button onclick="window.location.href='DeleteCustomer.php'">Delete Customer</button>
        <button onclick="window.location.href='SpecificQuantity.php'">Customers who Bought Specific Quantity of Product</button>
</div>
<hr>


<?php
 $dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";
$dbname = "jbonviveassign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);		//connect to database
if (mysqli_connect_errno()) {
 die("Database connection failed :" .
 mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
 } //end of if statement

 $Customer = $_GET["Customers"];
 $query = "SELECT QuantityPurchased, ProductID, Purchased.CustomerID FROM Customers INNER JOIN Purchased Where Customers.CustomerID=Purchased.CustomerID AND CLastName = '".$Customer."'"; //query to get necessary results
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }

echo "<table><tr><th>Quantity Purchased</th><th>ProductID</th><th>CustomerID</th>";
 while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>".$row["QuantityPurchased"]."</td>";
        echo "<td>".$row["ProductID"]."</td>";
        echo "<td>".$row["CustomerID"]."</td>";		//dislay table 

        echo "</tr>";
}
echo "</table>";
 mysqli_free_result($result);
?>

</body>
</html>
