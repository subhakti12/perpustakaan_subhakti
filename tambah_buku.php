<?php
    include_once("./connect.php");

    if(isset($_POST ["submit"])) {
        $NAMA = $_POST ["NAMA"];
        $ISBN = $_POST ["ISBN"];
        $UNIT = $_POST ["UNIT"];

        $query = mysqli_query ($db, "INSERT INTO buku VALUES (
            NULL, '$NAMA', '$ISBN', '$UNIT' 
        )"); 
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Tambah Buku</title>
</head>
<body>
    <h1>From Tambah Buku Baru</h1>

    <form action="" method="POST">
        <label for="NAMA">Nama Buku</label>
        <input type="text" id="NAMA" name="NAMA">

        <br>
        <br>

        <label for="ISBN">ISBN</label>
        <input type="text" id="ISBN" name="ISBN">

        <br>
        <br>

        <label for="UNIT">Unit</label>
        <input type="number" id="UNIT" name="UNIT">

        <br>
        <br>

        <button type = "submit" name = "submit">SUBMIT</button>
    </form>

    <br>
    <a href="./buku.php">Kembali ke Halaman Buku</a>
</body>
</html>