<?php

include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kota = $_POST['kota'];
$work = $_POST['work'];
$negara = $_POST['negara'];
$phone = $_POST['phone'];

if (!empty($kode) && !empty($nama) && !empty($kota) && !empty($work) && !empty($negara) && !empty($phone)){

    $udin = mysqli_query($con,"INSERT INTO customer 
    VAlues
    ('$kode','$nama','$kota','$work','$negara','$phone')" );
    
    include "Menu_Customer.php";
};

?>