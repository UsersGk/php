<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="add.php" method="post">
    <label for="Name">Name</label>
    <input type="text" name="name" required>
    <label for="Email">Email</label>
    <input type="Email" name="Email" required>
    <input type="hidden" name="id" value="<?php global $id?>">
    <button type="submit">Submit</button>
  </form>

  <hr>
  <table border="1" cellspacing="5">
    <tr>
      <thead>
      <th>Name</th>
      <th>Contact</th>
      <th colspan="2">Action </th>
</thead>
</tr>
  <?php
  include 'database.php';
  // $id=$_POST['id'];
  $sql="SELECT * FROM contact";
  $result= mysqli_query($conn,$sql);
  if($result)
  {
    while ($row =mysqli_fetch_assoc($result))
    {
      $id=$row['id'];
      $name=$row['Name'];
      $email=$row['Email'];
      ?>
      <tr>
        <td><?php echo $name;?></td>
        <td><?php echo $email;?></td>
        <td>
          <form action="delete.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id?>">
           <button type="submit">Delete</button>
          </form>
    </td>
    <td>
    <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="submit" value="update">
  </form>
    </td>
    </tr>

      <?php

    }
  }
  $conn->close();
  ?>
  </table>
  
</body>
</html>