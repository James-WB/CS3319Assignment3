<!DOCTYPE html>
<html>
<head>
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">			<!--Title and style-->
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

</head>
<body>
<?php
        include "connecttodbAssignment3.php";    //connects to database
?>
<h1>Products</h1>
<br>
<hr>
<div class="btn-group">
        <button onclick="window.location.href='ProductsDatabaseAscendingCost.php'">Product Database Ascending by Cost</button>
        <button onclick="window.location.href='ProductsDatabaseDescendingCost.php'">Product Database Descending by Cost</button>		<!--buttons for other features-->
        <button onclick="window.location.href='ProductsDatabaseAscendingDescription.php'">Product Database Ascending by Description</button>
        <button onclick="window.location.href='ProductsDatabaseDescendingDescription.php'">Product Database Descending by Description</button>
        <button onclick="window.location.href='ProductsNotPurchased.php'">Products Not Purchased</button>
        <button onclick="window.location.href='ParticularProduct.php'">Purchases for a Particular Product</button>
</div>
<hr>
</body>
<h3>Products Database Ascending by Description:</h3>
<?php
include 'getProductsDatabaseAscendingDescription.php';	//get table of products
?>
</html>
