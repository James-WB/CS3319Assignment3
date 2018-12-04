<!DOCTYPE html>
<html>
<head>
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

</head>
<body>
<?php
        include "connecttodbAssignment3.php";
?>
<h1>Products</h1>
<br>
<hr>
<div class="btn-group">
        <button onclick="window.location.href='ProductsDatabaseAscendingCost.php'">Product Database Ascending by Cost</button>
        <button onclick="window.location.href='ProductsDatabaseDescendingCost.php'">Product Database Descending by Cost</button>
        <button onclick="window.location.href='ProductsDatabaseAscendingDescription.php'">Product Database Ascending by Description</button>
        <button onclick="window.location.href='ProductsDatabaseDescendingDescription.php'">Product Database Descending by Description</button>
        <button onclick="window.location.href='ProductsNotPurchased.php'">Products Not Purchased</button>
        <button onclick="window.location.href='ParticularProduct.php'">Purchases for a Particular Product</button>
</div>
<hr>
</body>


<?php
 $dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";
$dbname = "jbonviveassign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
 die("Database connection failed :" .
 mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
 } //end of if statement

 $ProductID = $_GET["InputProductID"];
 $query = "SELECT Products.ProductID, TotalPurchased, TotalPurchased*CostPerItem as Sales FROM (SELECT Products.ProductID, SUM(QuantityPurchased) as TotalPurchased FROM (Products INNER JOIN Purchased on Products.ProductID = Purchased.ProductID) GROUP BY Products.ProductID) as QuantityTable INNER JOIN Products WHERE Products.ProductID = QuantityTable.ProductID AND Products.ProductID = '".$_GET["InputProductID"]."'";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }

echo "<table><tr><th>ProductID</th><th>Total Purchased</th><th>Sales</th>";
 while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>".$row["ProductID"]."</td>";
        echo "<td>".$row["TotalPurchased"]."</td>";
        echo "<td>".$row["Sales"]."</td>";

        echo "</tr>";
}
echo "</table>";
 mysqli_free_result($result);
?>
