<?php
    include("config.php");
        $id                  = $_POST['id'];
        $nama_mahasiswa      = $_POST['nama_mahasiswa'];
        $tanggal_lahir       = $_POST['tanggal_lahir'];
        $NIM                 = $_POST['NIM'];
        $jurusan             = $_POST['jurusan'];
        $agama               = $_POST['agama'];
        $divisi              = $_POST['divisi'];
        $status              = $_POST['status'];

        // query untuk mengubah data yang diambil
        $sql = "UPDATE tb_himatika SET nama_mahasiswa='$nama_mahasiswa', tanggal_lahir='$tanggal_lahir', 
        NIM='$NIM', jurusan='$jurusan', agama='$agama', divisi='$divisi', status='$status' WHERE id=$id ";
        $query = mysqli_query($connection, $sql);
        
        // hasil data yang diubah, akan diarahkan kembali pada index.php
        if( $query ) {
            header('Location: index.php');
    } else {
        die("Akses dilarang...");
    }
?>