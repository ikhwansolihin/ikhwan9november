<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $kode=$_POST['id'];
    $No_seri=$_POST['no_seri'];
    $Merek=$_POST['merek'];
    $Jumlah=$_POST['jumlah'];

    $sql="INSERT INTO tb_komputer(id, no_seri, merek, jumlah) VALUES ('$kode','$No_seri', '$Merek', '$Jumlah')";
    $query=mysqli_query($db, $sql);

    if($query){
        header('location:komputer.php?status:sukses');
    }else{
        header('location:komputer.php?status:gagal'); 
    }
}
?>