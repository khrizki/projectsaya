<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($db);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1 align="center">Halaman Registrasi</h1>

    <form action="" method="post">
    <fieldset>
            <legend><b>| Create New Account |</b></legend>
                <table border="0">
                    <tr>
                        <td><label for="username">Username :</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" id="username"><br></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password :</label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password"><br></td>
                    </tr>
                    <tr>
                        <td><label for="password">Konfirmasi Password :</label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password2" id="password2"><br></td>
                    </tr>
                </table>
                <button type="submit" name="register">Register!</button>
                <br><br><br>
                <button><a href="login.php">Sudah punya akun</a></button>
        </fieldset>
    </form>
</body>
</html>