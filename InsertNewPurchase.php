<!DOCTYPE html>
<html>
<head>
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

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "cs3319";
$dbname = "jbonviveassign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
$FinalQuantity;
if (mysqli_connect_errno()) {
 die("Database connection failed :" .
 mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
 } //end of if statement

 $ProductID = $_GET["ProductID"];
 $Quantity = $_GET["Quantity"];
 $CustomerID = $_GET["CustomerID"];


 $query = "SELECT * FROM Purchased";
 $result = mysqli_query($connection,$query);
 if (!$result) {
	 die("databases query failed. 1");
 }
 $bool = False;
 while ($row = mysqli_fetch_assoc($result)) {
	if($row['ProductID'] == $ProductID && $row['CustomerID'] == $CustomerID){
		$bool = True;
	}		
 }
 mysqli_free_result($result);

 if($bool == True){
	   
	$query2 = "SELECT QuantityPurchased from Purchased WHERE ProductID = '".$ProductID."' AND CustomerID = '".$CustomerID."'";
 	$result2 = mysqli_query($connection,$query2);
 	if (!$result2) {
 		die("databases query failed. 2");
	}

	while ($row = mysqli_fetch_assoc($result2)) {
        	$PreviousQuantity = $row['QuantityPurchased'];
 	}
 	mysqli_free_result($result2);


	$FinalQuantity = intval($PreviousQuantity) + intval($Quantity);
	echo "Purchase Added to Database";
	$query3 = "UPDATE Purchased SET QuantityPurchased = '".$FinalQuantity."' WHERE ProductID = '".$ProductID."' AND CustomerID = '".$CustomerID."'";
 	$result3 = mysqli_query($connection,$query3);
 	if (!$result3) {
 		die("databases query failed. 3");
	}
	
 }
 else{
	$query4 = "INSERT INTO Purchased VALUES ('".$Quantity."', '".$ProductID."', '".$CustomerID."')";
 	$result4 = mysqli_query($connection,$query4);
 	if (!$result4) {
 		die("databases query failed. 4");
 	}
 }
?>

</body>
</html>
