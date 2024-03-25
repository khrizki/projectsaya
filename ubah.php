<?php
session_start();
    
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query ("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit telah ditekan atau belum
if( isset($_POST["submit"]) ){
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo"
            <script>
                alert('data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo"
        <script>
            alert('data gagal diupdate!');
            document.location.href = 'index.php';
        </script>
    ";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>              
    <title>Update Data Mahasiswa</title>
</head>
<body>   
    <u><h2 align=center>=Update Data Mahasiswa=</h2></u>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
        <fieldset>
        <legend><b>| Update Data Mahasiswa |</b></legend>
            <table border="0">
                <tr>
                    <td><label for="nama">Nama </label></td>
                    <td> : <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>"><br></td>
                </tr>
                <tr>
                    <td> <label for="nim">Nim            </label></td>
                    <td> : <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>"><br></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td> : <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>"><br></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td> : <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>"><br></td>
                </tr>
                <tr>
                    <td><label for="gambar">Gambar</label></td>
                    <td>  <br><img src="img/<?= $mhs['gambar']; ?>" width="40"><br>
                    <input type="file" name="gambar" id="gambar"><br></td>
                </tr>
            </table>
            <button type="submit" name="submit">Update!!</button>
        </fieldset>
    </form>
    <i><p align=center>Created By : Khairul Rizky</p></i>
</body>
</html>