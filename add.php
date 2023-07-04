<?php
  
$name=$_POST['name'];
$email=$_POST['Email'];
echo $name;
echo $email;
include 'database.php';
$sql="INSERT INTO contact(Name, Email)values('$name','$email')";
$result= mysqli_query($conn,$sql); // used to executed the my sql code help
if($result)
{
    header('location: form.php');
}
?>