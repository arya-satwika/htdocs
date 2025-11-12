<?php
    include 'koneksi.php';
    session_start();

    if (isset($_POST['submitPasswords'])){
        $pass1 = $_POST['password'];
        $pass2 = $_POST['password-2'];
        $username = $_SESSION['username'];
        if($pass1 != $pass2){
            echo "Password tidak sama";
        }else{
            $update_query = "UPDATE users SET password = '$pass1' WHERE username = '$username'";
            mysqli_query($connection, $update_query);
            header('location:dashboard.php');
        }
    }
?>


<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loginpage.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/500px-Facebook_Logo_%282019%29.png" type="image/x-icon">
    <title>facebook</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php
        include 'pup.html';
    ?>
    <div class="container">
        <div class="login-container">
        <form action="ganti.php" method="POST">
            <h2>Ganti Password</h2>
            <br>
            <input class ="input-field" type="password" name="password" placeholder="New Password">
            <br>
            <input class ="input-field" type="password" name="password-2" placeholder="Verify Password">
            <br>
            <button name="submitPasswords" type="submit">Ganti Password</button>
        </form>
        </div>
        <p id="footer"><a id="footer-link">Create a Page</a> for a celebrity, brand or business.</p>
    </div>
</body>
</html>