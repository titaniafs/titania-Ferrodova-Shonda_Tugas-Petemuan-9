<?php    
   include("koneksi.php");

   $no = $_GET['no'];

   $query = "delete from isi where no = $no";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?no=$no");
   }

?>