<?php

require "koneksi.php";
$id = $_POST['id'];
$nama= $_POST['nama'];
$kode= $_POST['kode'];
$kota= $_POST['kota'];
$lokasi= $_POST['lokasi'];
$negara= $_POST['negara'];
$telepon= $_POST['telepon'];


$query = mysqli_query($con,"UPDATE customer SET CUST_NAME = '$nama',CUST_CODE = '$kode',CUST_CITY = '$kota'
,WORKING_AREA = '$lokasi',CUST_COUNTRY = '$negara',PHONE_NO = '$telepon'  WHERE CUST_CODE = '$id'");


INCLUDE "Menu_Customer.php";

?>