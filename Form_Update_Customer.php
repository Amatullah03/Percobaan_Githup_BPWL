<?php 

include "koneksi.php";

$id =$_GET['id'];

$query = mysqli_query($con,"SELECT*FROM customer WHERE CUST_CODE = '$id'");
$c = mysqli_fetch_array($query);

?>
<html>

<head>
    <title>Edit Data Customer</title>
</head>

</html>

<body style="background-color:#d0e8f2">
    <fieldset style="margin-left: 30%; margin-right: 30%; margin-top: 100px; background-color:#c9cbff">
        <h1 style="margin-left: 30px; margin-top: 30px;">
            <center>Edit Customer</center>
        </h1>
        <a href="Menu_Customer.php">
            <center>Menu Customer</center>
        </a>
        <form action="Update_Customer.php" method="POST">
            <center>
                <input type="hidden" value="<?php echo $c['CUST_CODE']; ?>" name="id" />
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $c['CUST_NAME'];?>" width="100%"
                                required /></td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td>:</td>
                        <td><input type="text" name="kode" value="<?php echo $c['CUST_CODE'];?>" width="100%"
                                required /></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td><input type="text" name="kota" value="<?php echo $c['CUST_CITY'];?> " width="100%"
                                required /></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td><input type="text" name="lokasi" value="<?php echo $c['WORKING_AREA'];?> " width="100%"
                                required /></td>
                    </tr>
                    <tr>
                        <td>Negara</td>
                        <td>:</td>
                        <td><input type="text" name="negara" value="<?php echo $c['CUST_COUNTRY'];?> " width="100%"
                                required /></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td><input type="text" name="telepon" value="<?php echo $c['PHONE_NO'];?> " width="100%"
                                required /></td>
                    </tr>
                    <td colspan="3">
                        <button type="submit">Save</button>
                    </td>
                    </tr>
                </table>
            </center>
        </form>
    </fieldset>
</body>