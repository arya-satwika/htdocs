<?php
session_start();
include 'koneksi.php';
if(isset($_POST['logout'])) {
    session_destroy();
    header('location:index.php');
}
if(isset($_POST['delete'])){
    $del_query = "DELETE FROM users WHERE username = '$_SESSION[username]'";
    mysqli_query($connection, $del_query);
    session_destroy();
    header('location:index.php');
}
if(isset($_POST['changePass'])){
    header('location:ganti.php');
}
if(isset($_POST['changeName'])){
    header('location:rename.php');
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
    <button type="submit" name="changePass">ganti password</button>
    <button type="submit" name="changeName">ganti nama</button>
    </form>
</body>
</html>