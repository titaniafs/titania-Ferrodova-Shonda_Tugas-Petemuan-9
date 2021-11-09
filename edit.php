<!DOCTYPE html>
<html lang="en">
<head>
    <title> From Pendaftaran Lomba SIK</title>
    <style>
         * {
        font-family: "Trebuchet MS";
      }
      h3 {
        text-transform: uppercase;
        color: salmon;
      }
      .horizontal_center{
       border-top: 3px solid salmon;
     height: 1px;
     width : 400px;
    }
    .horizontal_center2{
       border-top: 6px solid salmon;
     height: 2px;
     width : 100%;
    }
    .horizontal_center3{
     border-top: 3px solid orange;
     height: 2px;
     width : 100%;
    }
    </style>
</head>
<body>

    <?php
        include ("koneksi.php");
        $no = $_GET['no'];

        $query = "select * from isi where no = $no";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    <h1 align="center"> Formulir Pendaftaran Peserta Perlombaan SIK </h1>
    <div class="horizontal_center2"></div>
    <div class="horizontal_center3"></div>
    <br><br>
    <div class="horizontal_center"></div>
    <h3>Edit Data</h3>
    <div class="horizontal_center"></div>
    <br>
    <form action="proses_edit.php" method="POST" style="padding-left: 80px;">
        <input type="hidden" name="no" value="<?php echo $row['no']; ?>">
        Nama <br> <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        NIM  <br><input type="text" name="nim" value="<?php echo $row['nim']; ?>"><br><br>
        Tanggal Lahir  <br><input type="date" name="ttl" value="<?php echo $row['ttl']; ?>"><br><br>
        Agama <br><input type="text" name="agama" value="<?php echo $row['agama']; ?>"><br><br>
        Alamat<br><textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br><br>
        Motto Hidup <br><textarea name="mottohidup"><?php echo $row['mottohidup']; ?></textarea><br><br>
        No Handphone<br><input type="text" name="nohp" value="<?php echo $row['nohp']; ?>"><br><br>
        <input type="submit" value="simpan">
    </form>
    
</body>
</html>