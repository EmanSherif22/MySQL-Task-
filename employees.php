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

$query="SELECT emp.employeeNumber, emp.firstName, emp.lastName
from employees emp 
left join employees mrg on emp.employeeNumber";

$result=$con->query($query);

while($row=$result->fetch_assoc()){
    echo $row['employeeNumber']." ".$row['firstName']." ".$row['lastName']."<br/>";
}

?>