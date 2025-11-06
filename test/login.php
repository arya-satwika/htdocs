<?php
    include 'koneksi.php';
    session_start();


    if (isset($_SESSION['isLogin'])) {
        header("Location: dashboard.php");
    }


        if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (username, password) VALUE ('$username', '$password')";
        mysqli_query($connection, $query);

        $login = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $login);

        if($result->num_rows > 0){
            echo "Login Sukses";
            $_SESSION['isLogin'] = true;
            header("Location: home.php");
        } else {
            echo "Login Gagal";
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
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Facebook_Logo_%282019%29.svg/300px-Facebook_Logo_%282019%29.svg.png" alt="facebook">
        <p id="desc">
            Facebook helps you connect and share with the people in your life.
        </p>
        <div class="login-container">
        <form action="login.php" method="POST">
            <input class ="input-field" type="text" name="username" placeholder="Email or Phone Number">
            <br>
            <input class ="input-field" type="password" name="password" placeholder="Password">
            <br>
            <button name="login" type="submit">Log In</button>
            <a href="" class="forgor">Forgotten Password?</a>
        </form>
    
        </div>
        <p id="footer"><a id="footer-link">Create a Page</a> for a celebrity, brand or business.</p>
    </div>
</body>
</html>