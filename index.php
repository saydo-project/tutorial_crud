<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Himatika</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
    <center>
        <h1>Data Mahasiswa Himatika</h1>

        <a href="tambah.php" class="btn btn-primary" role="button">Tambah</a>
        <br><br>

        <form action="index.php" class="form-inline" method="get">
  			<div class="form-group mb-2">
				<h4 class="text-black">Cari nama mahasiswa : </h4>
  			</div>
  			<div class="form-group mx-sm-3 mb-2">
    			<label class="sr-only" name="cari">nama mahasiswa</label>
    			<input type="text" class="form-control" placeholder="Masukkan nama" name="cari">
  			</div>
                <input type="submit" class="btn btn-success mb-2" value="cari">
		</form>

        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            }
        // fungsi tombol untuk mencari data saat menekan tombol cari
		?>
    </center>
    <br>
    <table class="table table-bordered table-hover" width ="50%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Lahir</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Agama</th>
                <th>Divisi</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // proses query mencari nama mahasiswa setelah di submit
            if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($connection,"SELECT * FROM tb_himatika where nama_mahasiswa like '%".$cari."%'");    
            }else{
            $data = mysqli_query($connection,"SELECT * FROM tb_himatika");  
            }

            // untuk mengurutkan id sesuai nomornya
            $nomor = 1;

            // fungsi mengambil data pada MySQL
            while($himatika = mysqli_fetch_array($data)){
            echo "<tr>";

            // mengambil data data yang ada pada MySQL
            echo "<td>".$nomor."</td>";
            echo "<td>".$himatika['nama_mahasiswa']."</td>";
            echo "<td>".$himatika['tanggal_lahir']."</td>";
            echo "<td>".$himatika['NIM']."</td>";
            echo "<td>".$himatika['jurusan']."</td>";
            echo "<td>".$himatika['agama']."</td>";
            echo "<td>".$himatika['divisi']."</td>";
            echo "<td>".$himatika['status']."</td>";

            echo "<td>";

            // opsi untuk mengubah atau menghapus data lewat id
            echo "<a href='edit.php?id=".$himatika['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$himatika['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $nomor++;
        }
        ?>
        </tbody>
        </table>
        </div>
    <div class="footer">
        <center>
        <p>Sayid Ridho Ahmadin Yahya - 2011020</p>
        </center>
    </div>
</body>
</html>