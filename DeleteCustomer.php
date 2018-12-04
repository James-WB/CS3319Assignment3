<!DOCTYPE html>
<html>
<head>
	<?php
		include 'connecttodbAssignment3.php';
	?>
        <title>Customers and Purchases</title>
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
        <button onclick="window.location.href='InsertNewCustomer.php'">Insert a New Customer</button>
        <button onclick="window.location.href='UpdateCustomer.php'">Update Phone Number</button>
        <button onclick="window.location.href='DeleteCustomer.php'">Delete Customer</button>
        <button onclick="window.location.href='SpecificQuantity.php'">Customers who Bought Specific Quantity of Product</button>	
</div>
<hr>
<h4>Input Customer to be Deleted</h4>
<form action="getDeleteCustomer.php" method="get">
Customer to be deleted <select name="CustomerID">
<?php
 $query = "SELECT * from Customers";
        $result = mysqli_query($connection,$query);
        if (!$result) {
        die("databases query failed.");
         }
        while ($row = mysqli_fetch_assoc($result)){
	echo "<option value = '".$row['CustomerID']."'>".$row['CustomerID']."</option>";        
        }
        mysqli_free_result($result);
?>
</select>
<input type="submit">
</form>



</body>
</html>
