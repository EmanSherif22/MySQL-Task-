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

$query="SELECT customers.customerName as name , COUNT(orders.orderNumber) as my_orders
FROM customers join orders
on customers.customerNumber=orders.customerNumber
GROUP BY customers.customerName";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['name']." ".$row['my_orders']."<br/>";
}

?>