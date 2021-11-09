<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ttl= $_POST['ttl'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $mottohidup = $_POST['mottohidup'];
    $nohp = $_POST['nohp'];
    $nomer = $_POST['nomer'];


    $query = "insert into isi values ('', '$nama','$nim','$ttl','$agama', '$alamat','$mottohidup','$nohp', $nomer)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?no=$no");
    }

?>