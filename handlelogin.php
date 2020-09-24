<?php
include 'validation.php';
session_start();
//get data from user
$username=$_POST['username'];
$password=$_POST['password'];

//modification of data
//$username=modifyDate($username);
//$password=modifyDate($password);

//validation data
//$valid=validateLoginForm($username,$password);
//if($valid)
//{
   //storing data
$_SESSION['username']=$username;
$_SESSION['password']=$password;
//}


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


$query="SELECT customerName, password
FROM customers
WHERE customerName='$username' and password=$password";

$result=$con->query($query);
if($row=$result->fetch_assoc()){

    header('location:home.php');
}else{
    echo "you are not the same person, please try again";
}
?>