<!DOCTYPE html>
<html lang="en">
<head>
    <title> From Pendaftaran Lomba SIK</title>
    <style>
    * {
        font-family: "Trebuchet MS";
      }
      h2 {
        
        color: salmon;
      }
      h1 {
        text-transform: uppercase;
        color: Orange;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
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

    $query = "select * from isi";
    $hasil = mysqli_query($koneksi, $query);
?>
    <h1 align="center"> Formulir Pendaftaran Peserta Perlombaan SIK </h1>
    <div class="horizontal_center2"></div>
    <div class="horizontal_center3"></div>
    <br><br>
    <div class="horizontal_center"></div>
    <h2> Tambah Identitas </h2>
    <div class="horizontal_center"></div>
    <form action="proses_insert.php" method="POST" style="padding-left: 80px;">
        Nama  <br> <input type="text" name="nama" value=""><br><br>
        Alamat <br> <textarea name="alamat"></textarea><br> <br> 
        NIM <br> <input type="text" name="nim" value=""><br> <br> 
        Tanggal Lahir  <br> <input type="date" name="ttl" value=""><br> <br> 
        Agama <br>  <input type="text" name="agama" value=""><br> <br> 
        Alamat <br> <textarea name="alamat"></textarea><br> <br> 
        Motto Hidup <br> <textarea name="mottohidup"></textarea><br> <br> 
        No Handphone <br> <input type="text" name="nohp" value=""><br> <br> 
        Nomer <br> <input type="text" name="nomer" value=""><br> <br> 
        <input type="submit" value="simpan">
    </form>
    <br >
    <div class="horizontal_center"></div>
    <h2> Tabel Identitas </h2>
    <div class="horizontal_center"></div>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Motto Hidup</th>
            <th>No Handphone</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['no']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['nim']."</td>";
            echo "<td>".$row['ttl']."</td>";
            echo "<td>".$row['agama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['mottohidup']."</td>";
            echo "<td>".$row['nohp']."</td>";

            echo "<td><a href='edit.php?no=".$row['no']."'>edit</a></td>";
            echo "<td><a href='delete.php?no=".$row['no']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>  
    </table>
</body>
</html>

