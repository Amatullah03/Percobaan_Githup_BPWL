<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tambah Customer</title>
</head>

<body style="background-color:#d0e8f2">
    <h1 style="margin-left: 30px; margin-top: 30px;">Tambah Customer</h1>
    <form action="Insert_Customer.php" method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput" style="margin-left: 30px;">Kode Customer</label>
            <input style="width : 1000px; margin-left: 30px;" type="text" class="form-control"
                id="formGroupExampleInput" placeholder="Masukkan Kode" name="kode">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2" style="margin-left: 30px;">Nama Customer</label>
            <input style="width : 1000px; margin-left: 30px;" type="text" class="form-control"
                id="formGroupExampleInput2" placeholder="Masukkan Nama" name="nama">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput" style="margin-left: 30px;">Kota Customer</label>
            <input style="width : 1000px; margin-left: 30px;" type="text" class="form-control"
                id="formGroupExampleInput" placeholder="Masukkan Kota" name="kota">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2" style="margin-left: 30px;">Working Area</label>
            <input style="width : 1000px; margin-left: 30px;" type="text" class="form-control"
                id="formGroupExampleInput2" placeholder="Masukkan Working Area" name="work">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput" style="margin-left: 30px;">Negara Customer</label>
            <input style="width : 1000px; margin-left: 30px;" type="text" class="form-control"
                id="formGroupExampleInput" placeholder="Masukkan Negara" name="negara">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2" style="margin-left: 30px;">Phone Number</label>
            <input style="width : 1000px; margin-left: 30px;" type="text" class="form-control"
                id="formGroupExampleInput2" placeholder="Masukkan Phone Number" name="phone">
        </div>
        <button style="margin-left: 30px; margin-bottom: 30px;" type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>