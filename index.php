<?php
require "koneksi.php";
require "fungsi.php";
$query = "SELECT * FROM mahasiswa";
$mahasiswa = query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div align="center">
        <h1>Selamat Datang Admin </h1>
        <h2>Daftar Mahasiswa Universitas Lampung</h2>
        
        <a href="tambahdata.php"><button>Tambah Data</button></a> <br><br>
        <table border="1" cellspacing="0" cellpadding="10">
        <tr>
           <th>No.</th>
           <th>Nama</th>
           <th>NPM</th>
           <th>Jurusan</th>
           <th>Aksi</th>
         </tr>
         <?php $nomor = 1; ?>
         <?php foreach($mahasiswa as $mhs) : ?>
        
         <tr>
         <td><?= $nomor++; ?></td>
         <td><?= $mhs['nama']; ?></td>
         <td><?= $mhs['npm']; ?></td>
         <td><?= $mhs['jurusan']; ?></td>
         <td><a href="hapusdata.php?id= <?= $mhs['id']; ?>">Hapus</a></td>
         </tr>
         <?php endforeach; ?>
        </table>
    </div>
</body>
</html>