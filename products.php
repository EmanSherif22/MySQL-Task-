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

$query="SELECT products.productName as name , COUNT(orderdetails.quantityOrdered) as quantity , SUM(orderdetails.priceEach) as price
FROM orderdetails join products
on orderdetails.productCode=products.productCode
GROUP BY products.productName
ORDER by COUNT(orderdetails.quantityOrdered) DESC";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['name']." ".$row['quantity']." ".$row['price']."<br/>";
}

?>