<!DOCTYPE html>
<html>
<head>
<?php
        include 'connecttodbAssignment3.php'; 	//connect to database
?>
        <title>Customers and Purchases</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">				<!--title and style-->
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
<h4>Phone Number Updated</h4>
<?php
 $query = "Update Customers SET PhoneNumber = '".$_GET['PhoneNumber']."' WHERE CustomerID = '".$_GET['CustomerID']."'";	//query to update customers phone number
        $result = mysqli_query($connection,$query);
        if (!$result) {
        die("databases query failed.");
         }
?>


</form>
</body>
</html>
