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


$query="SELECT DISTINCT city
            FROM customers";

$result=$con->query($query);
?>

<html>
<body>
    <form action="handle3.php" method="post">
    <select name="city">
    <?php
while($row=$result->fetch_assoc()){
   ?>
    <option><?php echo $row['city']?></option>
    <?php
}
?>
</select>
    <input type="submit" value="submit" />
    </form>
</body>
</html>

    




