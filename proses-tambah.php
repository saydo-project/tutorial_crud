<?php
    include "config.php";

    $nama_mahasiswa      = $_POST['nama_mahasiswa'];
    $tanggal_lahir       = $_POST['tanggal_lahir'];
    $NIM                 = $_POST['NIM'];
    $jurusan             = $_POST['jurusan'];
    $agama               = $_POST['agama'];
    $divisi              = $_POST['divisi'];
    $status              = $_POST['status'];

    // query untuk menambahkan data pada table himatika
    $sql ="INSERT INTO tb_himatika(nama_mahasiswa, tanggal_lahir, NIM, jurusan, agama, divisi, status) 
    VALUES ('$nama_mahasiswa', '$tanggal_lahir', '$NIM', '$jurusan', '$agama', '$divisi', '$status')";
    $query = mysqli_query($connection, $sql);

    // Jika Sukses, kembali ke index.php untuk melihat data
    if (!$query) {
        die("failed");
    } else {
        header("location: index.php");
    }
?>