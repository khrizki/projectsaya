<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    // tombol cari ditekan
    if (isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/styles.css" />
    
    <script src="js/jquery-3.7.1.min.js"></script>    
    <script src="js/script.js"></script>
</head>
<body>
    <div class="menu">    
        <header>
            <p align=right><?= date("l, d M Y"); ?><br></p><br>
            <h1 align=center>Selamat Datang di Halaman Home<br><br>Website Saya</h1>
            <br><p align=right><i>By : Khairul Rizky</i> </p>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About me</a>
            <a href="service.php">Service</a>
            <a href="cell.php">Call Center</a>
        </nav>
        <br> 
        <main>
            <h2>Tabel Mahasiswa</h2>
        </main>
        <br><br>
            <nav>
                <p align=left><a href="tambah.php"><u>Tambah data mahasiswa</u></a> </p>
            </nav>
        <form action="" method="post">
            <input type="text" name="keyword" size="30" autofocus 
            placeholder="Masukan keyword pencarian..." autocomplete="off" id="keyword">
            <button type="submit" name="cari" id="tombol-cari">Search!</button>
            <img src="img/loader.gif" class="loader">
        </form>
        <br>

        <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr align="center">
                <b>
                    <td>No.</td>
                    <td>Aksi</td>
                    <td>Gambar</td>
                    <td>Nama</td>
                    <td>Nim</td>
                    <td>Email</td>
                    <td>Jurusan</td>
                </b>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($mahasiswa as $row ) : ?>
                <tr style="text-align: center;">
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Update</a>|
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
                    </td>
                    <td><img style="border:0px; width:85px; margin: 5px 3px;" src="img/<?= $row["gambar"]; ?>" /></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        </div>
        </main>
        <br>
        <nav>
            <p align=center><a href="logout.php"><u>Logout</u></a></p>
        </nav>
        <br><br>
        <footer>
            <center><p>© Copyright 2023 <br> Create by : <a href="#">Khairul Rizky</a></center>
        </footer>
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>    
    <script src="js/script.js"></script>    
</body>
</html>