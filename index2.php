<?php
// TAG PHP UNTUK MENGKONEKSIKAN KE DATABASE
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa/meng-query data mahasiswa

$result = mysqli_query( $conn, "SELECT * FROM mahasiswa");

// var_dump($result); // 
// $result itu masih lemarinya, SELECT * FROM mahasiswa itu masih keseluruhan datanya


// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()  
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// while ( $mhs = mysqli_fetch_assoc($result) ) {
// };


?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
    <tr>
        <td><?php echo $i; ?></td>
        <td><a href="">ubah</a> | <a href="">hapus</a></td>
        <td><img src="<?= $row["gambar"];?>"</td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>




</table>
</body>
</html>