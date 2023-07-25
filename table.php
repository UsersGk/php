<?php
// include ('./database.php');
$host="localhost";
$user="root";
$pass="";
$dbname="dbs";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn)
{
    echo "Connecting to";
}
$sql="CREATE TABLE JAYNEPAL(
    id INT(6) primary key AUTO_INCREMENT NOT NULL,
    name VARCHAR(255),
    email VARCHAR(255),
    address VARCHAR(255),
    password VARCHAR(255)
    )";
$RESULT=mysqli_query($conn,$sql);
if ($RESULT){
    echo "table created";
}
else {
    echo "table not created";
}
?>