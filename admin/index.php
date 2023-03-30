<?php
// start session
session_start();

// Jika admin sudah login, tendang admin ke halaman dashboard
if (isset($_SESSION['username'])) {
    header("Location: pages/dashboard/dashboard.php");
    exit();
}

// req config database
require "../config/config.php";

// jika user telah submit form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // tangkap data yang dikirimkan dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek apakah username dan password yang dimasukkan sudah sesuai
    if ($username === "prasetyanto" && $password === "Bowo080606*#*#.") {

        // set session
        $_SESSION['username'] = $username;

        // redirect ke halaman selanjutnya
        header("Location: pages/dashboard/dashboard.php");
        exit();
    } else {
        // jika username dan password tidak sesuai, tampilkan modal
        $msger = "<script>alert('Username atau Password salah');</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="loginas/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <!-- Modal -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="loginas/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="loginas/img/bg.svg">
        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="loginas/img/avatar.svg">
                <h2 class="title">Welcome Back</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" autofocus required class="input" name="username" autocomplete="off">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" required name="password">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="loginas/js/main.js"></script>
    <?php
    echo "$msger";
    ?>
</body>

</html>
