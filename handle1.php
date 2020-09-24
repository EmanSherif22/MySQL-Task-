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
$customerId=$_POST['customer_id'];
$query="SELECT customerNumber, customerName, phone, city, state, country, creditLimit
FROM customers
WHERE customerNumber=$customerId";

$result=$con->query($query);
while($row=$result->fetch_assoc()){
    echo $row['customerNumber']." ".$row['customerName']." ".$row['phone']." ".$row['city']." ".$row['state']." ".$row['country']." ".$row['creditLimit']."<br/>";
}

?>
