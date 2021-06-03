<?php

require "koneksi.php";

function tambah($data)
{
    global $conn;
    $nama = $data['nama'];
    $npm = $data['NPM'];
    $jurusan = $data['jurusan'];

    $sql = "INSERT INTO mahasiswa (nama, npm, jurusan) VALUES ('$nama', '$npm', '$jurusan')";
    if (mysqli_query($conn, $sql)) {
        return true;
        echo "New Record created Successfully";
    } else {
        return false;
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}