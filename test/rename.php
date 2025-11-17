<?php

    session_start();
    include 'koneksi.php';
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
        include 'pup.html'
    ?>
    <div class="container">
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Facebook_Logo_%282019%29.svg/300px-Facebook_Logo_%282019%29.svg.png" alt="facebook">
        <div class="login-container">
        <form action="rename.php" method="POST">
            <input class ="input-field" type="text" name="username" placeholder="Email or Phone Number">
            <br>
            <button name="button" type="submit">Change Username</button>
        </form> 
        <div class="text-red-500">
        <?php 
            if(isset($_POST['button'])) {
                $new_username = $_POST['username'];
                $cek_query = "SELECT * FROM users WHERE username = '$new_username'";
                $cek_result = mysqli_query($connection, $cek_query);
                if(mysqli_num_rows($cek_result) > 0){
                    echo "<p>Username Sudah terdaftar</p>";
                }else{
                    $change_query = "UPDATE users SET username = '$new_username' WHERE username = '$_SESSION[username]'";
                    mysqli_query($connection, $change_query);
                    $_SESSION['username'] = $new_username;
                    header('location:dashboard.php');
                }
            }
         ?>
        </div>
        </div>
        <p id="footer"><a id="footer-link">Create a Page</a> for a celebrity, brand or business.</p>
    </div>
</body>
</html>