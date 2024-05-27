<?php
    include_once("./connect.php");

    if(isset($_POST ["submit"])) {
        $NAMA = $_POST ["NAMA"];
        $WHATSAPP = $_POST ["WHATSAPP"];
        $EMAIL = $_POST ["EMAIL"];

        $query = mysqli_query ($db, "INSERT INTO staff VALUES (
            NULL, '$NAMA', '$WHATSAPP', '$EMAIL' 
        )"); 
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Tambah Staff</title>
</head>
<body>
    <h1>From Tambah Staff Baru</h1>

    <form action="" method="POST">
        <label for="NAMA">Nama Staff</label>
        <input type="text" id="NAMA" name="NAMA">

        <br>
        <br>

        <label for="WHATSAPP">Whatsapp</label>
        <input type="text" id="WHATSAPP" name="WHATSAPP">

        <br>
        <br>

        <label for="EMAIL">Email</label>
        <input type="EMAIL" id="EMAIL" name="EMAIL">

        <br>
        <br>

        <button type = "submit" name = "submit">SUBMIT</button>
    </form>

    <br>
    <a href="./staff.php">Kembali ke Halaman Staff</a>
</body>
</html>