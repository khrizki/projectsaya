<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    // ambil  username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_COOKIE['login'] = true;
    }
}
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // cek session
            $_SESSION["login"] = true;
            // cek remember me
            if (isset($_POST["remember"])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1 align="center">Halaman Login</h1>
    <?php if (isset($error)) :?>
        <p style="color: red; font-style: italic;">Username / password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <fieldset>
            <legend><b>| Login |</b></legend>
                <table border="0">
                    <tr>
                        <td><label for="username">Username </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" id="username"><br></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password"><br></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label><br>
                        </td>
                    </tr>
                </table>
            <button type="submit" name="login">Login</button><br><br><br>
            <button><a href="registrasi.php">Create New Account</a></button>
        </fieldset>
    </form>
</body>
</html>