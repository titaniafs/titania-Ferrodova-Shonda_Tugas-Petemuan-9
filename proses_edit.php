<?php

    include("koneksi.php");

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ttl= $_POST['ttl'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $mottohidup = $_POST['mottohidup'];
    $nohp = $_POST['nohp'];

    $query = "update isi set nama = '$nama', nim ='$nim',ttl ='$ttl',agama ='$agama', alamat = '$alamat' , mottohidup='$mottohidup', nohp='$nohp' where no = $no";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?no= $no");
    }

?>