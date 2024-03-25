<?php
sleep(1);
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM mahasiswa 
            WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            email LIKE '%$keyword%' 
            ";
$mahasiswa = query($query);
?>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Nim</td>
            <td>Email</td>
            <td>Jurusan</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Update</a>|
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="65"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>