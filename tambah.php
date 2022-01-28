<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambahkan Data Mahasiswa Himatika Baru</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<a href="index.php" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Go Back</a>
    <div class="container">
    <center>
    <h1>Formulir Tambah Data Himatika</h1>
    <br>
    </center>
    <form action="proses-tambah.php" method="post">
        <div class="mb-3">
        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa">
        </div>

        <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal lahir">
        </div>

        <div class="mb-3">
        <label for="NIM" class="form-label">NIM</label>
        <input type="text" class="form-control" name="NIM" placeholder="Masukkan NIM Mahasiswa">
        </div>

        <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label><br>
        <select class="form-control" name="jurusan">
            <option selected disabled>Silahkan Pilih Jurusan Disini</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Informasi">Teknik Informasi</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="agama" class="form-label">Agama</label><br>
        <select class="form-control" name="agama">
            <option selected disabled>Silahkan Pilih Agama Disini</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Protestan">Protestan</option>
        </select>
        </div>

        <div class="form-check form-check-inline">
        <label for="divisi">Divisi</label><br>
            <input class="form-check-label" type="radio" name="divisi" id="divisi1" value="divisi Pendidikan">
            <label class="form-check-label" for="divisi">divisi Pendidikan</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-label" type="radio" name="divisi" id="divisi2" value="divisi Kerohanian">
            <label class="form-check-label" for="divisi">divisi Kerohanian</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-label" type="radio" name="divisi" id="divisi3" value="divisi Kewarganegaraan">
            <label class="form-check-label" for="divisi">divisi Kewarganegaraan</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-label" type="radio" name="divisi" id="divisi4" 
            value="divisi Intelektual minat dan bakat">
            <label class="form-check-label" for="divisi">divisi Intelektual minat dan bakat</label>
        </div>
        <br>
        <div class="form-check form-check-inline">
        <label for="status">Status Keanggotaan</label><br>
            <input class="form-check-label" type="radio" name="status" id="status1" value="Ketua">
            <label class="form-check-label" for="status">Ketua</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-label" type="radio" name="status" id="status2" value="Wakil Ketua">
            <label class="form-check-label" for="status">Wakil Ketua</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-label" type="radio" name="status" id="status3" value="Anggota">
            <label class="form-check-label" for="status">Anggota</label>
        </div>

        <center>
        <button class="btn btn-success">Simpan</button>
        </center>
    </form>
    </div>
</body>
</html>