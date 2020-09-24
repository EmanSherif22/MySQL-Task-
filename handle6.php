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
$productId=$_POST['product_id'];

$query="SELECT COUNT(orderdetails.productCode) as times_number, orderdetails.orderNumber as order_number, customers.customerName as name
FROM customers JOIN orders
ON customers.customerNumber=orders.customerNumber
JOIN orderdetails
ON orderdetails.orderNumber=orders.orderNumber
WHERE orderdetails.productCode='$productId'
GROUP BY customers.customerName
ORDER BY customers.customerName DESC";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['times_number']." ".$row['order_number']." ".$row['name']."<br/>";
}

?>
