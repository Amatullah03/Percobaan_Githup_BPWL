<?php 

require "koneksi.php";

//tangkap id yang ingin di hapus
$id =$_GET['id'];


$query = mysqli_query($con,"DELETE FROM customer WHERE CUST_CODE = '$id'");

echo "<h1> data berhasil di hapus</h1>";

echo "berhasil";
include "Menu_Customer.php";


?>