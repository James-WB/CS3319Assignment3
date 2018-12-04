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
<h3>Find Purchases for Particular Product</h3>
<form action="getParticularProduct.php" method="get">
ProductID: <input type="Number" name="InputProductID" required><br>
<input type="submit">
</form>

</body>

</html>
