<?php
$serverName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="sunday_company";

//connection
$con=new mysqli($serverName,$dbUser,$dbPassword,$dbName);

if($con->connect_error)
{
    die($con->connect_error);
}


//get input from users 
$number=$_POST['number'];

$query="SELECT productName, SUM(quantityInStock) as quantity_sum
FROM products
WHERE quantityInStock > $number
GROUP BY productName";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['productName']." ".$row['quantity_sum']."<br/>";
}

?>
