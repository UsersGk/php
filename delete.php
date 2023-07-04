<?php
  include 'database.php';
  $id=$_POST['id'];
$sql="delete from contact where id=$id";
$result= mysqli_query($conn,$sql); // used to executed the my sql code help
if($result)
{
    header('location: form.php');
}
?>