<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
</head>
<body>
    <?php
    // Include database connection
    include 'database.php';

    // Check if the form is submitted
    if (isset($_POST['id'])) {
        // Retrieve contact information from the database
        $id = $_POST['id'];
        $sql = "SELECT * FROM contact WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['Name'];
        $email = $row['Email'];

        // Update contact in the database
        if (isset($_POST['update'])) {
            $newName = $_POST['name'];
            $newEmail = $_POST['email'];

            $updateSql = "UPDATE contact SET Name='$newName', Email='$newEmail' WHERE id='$id'";
            $updateResult = mysqli_query($conn, $updateSql);

            if ($updateResult) {
                echo "Contact updated successfully.";
            } else {
                echo "Error updating contact: " . mysqli_error($conn);
            }
        }
        
    }
    ?>

    <h1>Update Contact</h1>
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
