<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?> 



<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?> 
    <tr>
        <td><?php echo $i; ?></td>
        <td><a href="">ubah</a> | <a href="">hapus</a></td>
        <td><img src="<?= $row["gambar"] ;?>"</td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>




</table>
</body>
</html>