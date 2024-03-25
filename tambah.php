<?php
session_start();
    
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
// cek apakah tombol submit telah ditekan atau belum
if( isset($_POST["submit"]) ){
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo"
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo"
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>              
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1 align=center>=Tambah Data Mahasiswa=</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend><b>| Add Data Mahasiswa |</b></legend>
            <table border="0">
                <tr>
                    <td><label for="nama">Nama </label></td>
                    <td> : <input type="text" name="nama" id="nama"><br></td>
                </tr>
                <tr>
                    <td> <label for="nim">Nim            </label></td>
                    <td> : <input type="text" name="nim" id="nim"><br></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td> : <input type="text" name="email" id="email"><br></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td> : <input type="text" name="jurusan" id="jurusan"?><br></td>
                </tr>
                <tr>
                    <td><label for="gambar">Gambar</label></td>
                    <td> : <input type="file" name="gambar" id="gambar"><br></td>
                </tr>
            </table>
            <br><br>
            <button type="submit" name="submit">Add!!</button>
        </fieldset>
    </form>
</body>
</html>