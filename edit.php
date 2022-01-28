<?php

include("config.php");

// mengambil struktur id dari index.php
if(!isset($_GET['id']) ) {
    header('Location: index.php');
}

$id = $_GET['id'];

// mengambil data untuk di edit 
$sql = "SELECT * FROM tb_himatika WHERE id=$id";
$query = mysqli_query($connection, $sql);
$himatika = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa Himatika</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <a href="index.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Go Back</a>
    <div class="container">
    <h3><center>Formulir Edit Data Mahasiswa Himatika</center></h3>

    <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $himatika['id'];?>"/>

            <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo $himatika['nama_mahasiswa'];?>">
            </div>

            <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $himatika['tanggal_lahir'];?>">
            </div>

            <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input type="text" class="form-control" name="NIM" value="<?php echo $himatika['NIM'];?>">
            </div>

            <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label><br>
            <select class="form-control" name="jurusan">
                <option selected disabled>Silahkan Pilih Jurusan Disini</option>
                <option value="Informatika"<?php echo $himatika['jurusan']?>>Informatika</option>
                <option value="Sistem Informasi"<?php echo $himatika['jurusan']?>>Sistem Informasi</option>
                <option value="Teknik Informasi"<?php echo $himatika['jurusan']?>>Teknik Informasi</option>
            </select>
            </div>

            <div class="mb-3">
            <label for="agama" class="form-label">Agama</label><br>
            <select class="form-control" name="agama">
                <option selected disabled>Silahkan Pilih Agama Disini</option>
                <option value="Islam"<?php echo $himatika['agama']?>>Islam</option>
                <option value="Kristen"<?php echo $himatika['agama']?>>Kristen</option>
                <option value="Katolik"<?php echo $himatika['agama']?>>Katolik</option>
                <option value="Hindu"<?php echo $himatika['agama']?>>Hindu</option>
                <option value="Buddha"<?php echo $himatika['agama']?>>Buddha</option>
                <option value="Konghucu"<?php echo $himatika['agama']?>>Konghucu</option>
                <option value="Protestan"<?php echo $himatika['agama']?>>Protestan</option>
            </select>
            </div>

            <div class="form-check form-check-inline">
                <label for="divisi">Divisi</label><br>
                <input class="form-check-label" type="radio" name="divisi" id="divisi1" value="divisi Pendidikan"
                <?php echo $himatika['divisi']?>>
                <label class="form-check-label" for="divisi">divisi Pendidikan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-label" type="radio" name="divisi" id="divisi2" value="divisi Kerohanian"
                <?php echo $himatika['divisi']?>>
                <label class="form-check-label" for="divisi">divisi Kerohanian</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-label" type="radio" name="divisi" id="divisi3" value="divisi Kewarganegaraan"
                <?php echo $himatika['divisi']?>>
                <label class="form-check-label" for="divisi">divisi Kewarganegaraan</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-label" type="radio" name="divisi" id="divisi4" 
                value="divisi Intelektual minat dan bakat"<?php echo $himatika['divisi']?>>
                <label class="form-check-label" for="divisi">divisi Intelektual minat dan bakat</label>
            </div>
            <br>
            <div class="form-check form-check-inline">
                <label for="status">Status Keanggotaan</label><br>
                <input class="form-check-label" type="radio" name="status" id="status1" 
                value="Ketua"<?php echo $himatika['status']?>>
                <label class="form-check-label" for="status">Ketua</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-label" type="radio" name="status" id="status2" 
                value="Wakil Ketua"<?php echo $himatika['status']?>>
                <label class="form-check-label" for="status">Wakil Ketua</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-label" type="radio" name="status" id="status3" 
                value="Anggota"<?php echo $himatika['status']?>>
                <label class="form-check-label" for="status">Anggota</label>
            </div>
           
            <center>
            <button class="btn btn-primary">Simpan</button>
            </center>
    </form>
    </div>
</body>
</html>