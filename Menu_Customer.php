<?php 
require 'koneksi.php';

?>
<html>

<head>
    <title>Menu Customer</title>
    <link href="sd.css" rel="stylesheet">
</head>

</html>

<body style="background-color:#d0e8f2"><center>
    <h1>Menu Customer</h1>
    <div class="table" >
    <a href="Form_Insert_Customer.php">Tambah Customer</a>
        <table width="1000" border="1" cellspacing="0" cellpadding="0">
            <tr>
                <th>Kode Customer</th>
                <th>Nama Customer</th>
                <th>Kota Customer</th>
                <th>Working Area</th>
                <th>Negara Customer</th>
                <th>Phone Number</th>
                <th>Aksi</th>
            </tr>
            
    <?php
    //deklarasi hubungan table mana yang di gunakan 
    $query = mysqli_query($con, "SELECT* FROM customer");
    $i=1;
    //menampilkan isi dalam table database
    while ($a = mysqli_fetch_array($query) ){
        ?>
        <tr>
            <td><?php print $a["CUST_CODE"];?></td>
            <td><?php print $a["CUST_NAME"];?></td>
            <td><?php print $a["CUST_CITY"];?></td>
            <td><?php print $a["WORKING_AREA"];?></td>
            <td><?php print $a["CUST_COUNTRY"];?></td>
            <td><?php print $a["PHONE_NO"];?></td>
            <td>
                <a href="Form_Update_Customer.php?id=<?php echo $a['CUST_CODE'];?> ">Edit |</a>
                <a href="Hapus_Customer.php?id=<?php echo $a['CUST_CODE']; ?>">| Hapus</a>
            </td>
        </tr>
            
        <?php $i++; 
    };
        ?>
        </table>
    </div>
</center></body>