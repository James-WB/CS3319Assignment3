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

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "cs3319";
$dbname = "jbonviveassign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
 die("Database connection failed :" .
 mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
 } //end of if statement

 $FirstName = $_GET["FirstName"];
 $LastName = $_GET["LastName"];
 $CustomerID = $_GET["CustomerID"];
 $PhoneNumber = $_GET["PhoneNumber"];
 $PhoneNumber = substr($PhoneNumber, 0, 3) .'-'. substr($PhoneNumber,3,7);
 $City = $_GET["City"];
 $AgentID = $_GET["AgentID"];

 $query = "SELECT * FROM Customers";
 $result = mysqli_query($connection,$query);
 if (!$result) {
         die("databases query failed. 1");
 }
 $bool = False;
 while ($row = mysqli_fetch_assoc($result)) {
        if($row['CustomerID'] == $CustomerID){
                $bool = True;
        }
 }
 mysqli_free_result($result);

 if($bool == True){
        echo "Customer Already in Database";

}
 else{
 echo "Customer Added to Database";
 $query2 = "INSERT INTO Customers (CustomerID, CFirstName, CLastName, CCity, PhoneNumber, AgentID) VALUES ('".$CustomerID."','".$FirstName."','".$LastName."','".$City."','".$PhoneNumber."','".$AgentID."')";
       $result2 = mysqli_query($connection,$query2);
        if (!$result2) {
                die("databases query failed.");
        }




}
?>


<body>
<html>
