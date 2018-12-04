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
<h4>Insert Info to Create New Customer</h4>

<form action="getInsertNewCustomer.php" method="get" required>
        Customer ID: <input type="number" name="CustomerID" required><br>
        Customer Last Name: <input type="text" name="LastName" required><br>
        Customer First Name: <input type="text" name="FirstName" required><br>
        City: <input type="text" name="City" required><br>
        Phone Number: <input type="number" name="PhoneNumber" min="1000000" max="9999999" required><br>
	Agent ID:<select name="AgentID" required>
	
	<?php
 	$query = "SELECT * from Agents";
 	$result = mysqli_query($connection,$query);
 	if (!$result) {
 		die("databases query failed.");
	 }
 	while ($row = mysqli_fetch_assoc($result)){
        	echo "<option value = '".$row['AgentID']."'>".$row['AgentID']."</option>";
 	}
 	mysqli_free_result($result);
	?>
	
	</select>
        <input type="submit"">
</form>
</body>
</html>
