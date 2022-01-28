<?php
    include  'config.php';

    $id = $_GET['id'];

    // query untuk menghapus data
    $sql ="DELETE FROM tb_himatika WHERE id='$id'";
    $query = mysqli_query($connection, $sql);

    // jika data berhasil dihapus,
    // maka pengguna tetap diarahkan kembali pada index.php
    if ($query) {
        header("location: index.php");
    } else {
        echo "gagal mengahapus data";
    }

?>