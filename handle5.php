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
$city=$_POST['city'];

$query="SELECT customerName, creditLimit 
FROM customers 
WHERE city='$city'
ORDER BY creditLimit DESC
LIMIT 3";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['customerName']." ".$row['creditLimit']."<br/>";
}

?>
