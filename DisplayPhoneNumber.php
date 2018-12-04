<!DOCTYPE html>
<html>
<head>
<?php
        include 'connecttodbAssignment3.php'; //connect to database
?>
        <title>Customers and Purchases</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">			<!--title and style-->
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

</head>

<body>

<h1>Customers and Purchases</h1>
<br>
<hr>
<div class="btn-group">

	<button onclick="window.location.href='CustomerDatabase.php'">Customer Database</button>
        <button onclick="window.location.href='NewPurchase.php'">Insert New Purchase</button>			<!--group of buttons for all queries-->
        <button onclick="window.location.href='InsertNewCustomer.php'">Insert a New Customer</button>
        <button onclick="window.location.href='UpdateCustomer.php'">Update Phone Number</button>
        <button onclick="window.location.href='DeleteCustomer.php'">Delete Customer</button>
        <button onclick="window.location.href='SpecificQuantity.php'">Customers who Bought Specific Quantity of Product</button>

</div>
<hr>

<h4>Insert Info to Create New Customer</h4>

<?php
 echo "Phone Number for ";
 echo $_GET['CustomerID'] . " is:";
 $query = "SELECT * from Customers WHERE CustomerID = '".$_GET['CustomerID']."'";	//query to get phone number for customer inputted
        $result = mysqli_query($connection,$query);
        if (!$result) {
        	die("databases query failed.");
        }
        while ($row = mysqli_fetch_assoc($result)){
		echo " ";
		echo $row['PhoneNumber'];
        }
        mysqli_free_result($result); 
?>

<form action="getUpdatePhoneNumber.php" method="get">
        Update Phone Number:<input type = "number" name="PhoneNumber">
	<input type="hidden" name="CustomerID" value="<?php echo $_GET['CustomerID']?>">	<!--form to update phone number-->
        <input type="submit"">
</form>



</form>
</body>
</html>
