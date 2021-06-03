<?php
require "koneksi.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        echo"Berhasil Dihapus.";
        header('Location: index.php');
    } else {
        die("Gagal Menghapus");

    }

} else {
     die("Data tidak ada.");

}