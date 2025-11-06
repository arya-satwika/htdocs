<?php
session_start();

if(isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'pup.html' ?>
    <h3>Welcome to the Dashboard</h3>
    <p>You have successfully logged in.</p>
    <p>dibuat oleh saya sendiri</p>

    <form action="dashboard.php" method="POST">
    <button type="submit" name="logout"> logout</button>
    </form>
</body>
</html>