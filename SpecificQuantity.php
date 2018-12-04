<!DOCTYPE html>
<html>
<head>
        <title>Customers and Purchases</title>					<!--title and style-->
        <link rel="stylesheet" type="text/css" href="assignment3.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

</head>
<body>

<h1>Customers and Purchases</h1>
<br>
<hr>
<div class="btn-group">
	
	<button onclick="window.location.href='CustomerDatabase.php'">Customer Database</button>
        <button onclick="window.location.href='NewPurchase.php'">Insert New Purchase</button>
        <button onclick="window.location.href='InsertNewCustomer.php'">Insert a New Customer</button>		<!--buttons for other features-->
        <button onclick="window.location.href='UpdateCustomer.php'">Update Phone Number</button>
        <button onclick="window.location.href='DeleteCustomer.php'">Delete Customer</button>
        <button onclick="window.location.href='SpecificQuantity.php'">Customers who Bought Specific Quantity of Product</button>
</div>
<hr>
<h4>Select Quantity to See Customers who Bought More than than Quantity of any Product</h4>
<form action="getSpecificQuantity.php" method="get" required>					
Quantity: <input type="numbers" name="Quantity" min="0" required>	<!--form that goes to other php file to get quantity table
<input type="submit">
</form>


</body>
</html>
