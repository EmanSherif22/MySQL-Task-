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
$password=$_POST['password'];
$customerId=$_POST['customer_id'];

$query="UPDATE customers
SET password=$password
WHERE customerNumber=$customerId";

if($con->query($query)==true)
{
    echo "inserted successfully <br/>";
}else
{
    die($con->error);
}

?>