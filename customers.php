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

$query="SELECT customerName , creditLimit
FROM customers
WHERE creditLimit > 20000";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']." ".$row['creditLimit']."<br/>";
}

?>