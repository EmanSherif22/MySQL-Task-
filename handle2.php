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
$customerName=$_POST['customerName'];

$query="SELECT customerName 
FROM customers 
WHERE customerName LIKE '%$customerName%'";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']."<br/>";
}


?>
