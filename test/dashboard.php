<?php
session_start();
include 'koneksi.php';
if(isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}
if(isset($_POST['delete'])){
    $del_query = "DELETE FROM users WHERE username = '$_SESSION[username]'";
    mysqli_query($connection, $del_query);
    session_destroy();
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php include 'pup.html' ?>
    <h3>Welcome to the Dashboard</h3>
    <p>You have successfully logged in.</p>
    <p>dibuat oleh saya sendiri</p>

    <form action="dashboard.php" method="POST">
    <button type="submit" name="logout"> logout</button>
    <button type="submit" name="delete"> delete account</button>
    </form>
</body>
</html>