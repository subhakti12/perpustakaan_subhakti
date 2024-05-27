<?php
    include_once("./connect.php");

    $ID = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE ID = $ID");

    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST ["submit"])) {
        $NAMA = $_POST ["NAMA"];
        $ISBN = $_POST ["ISBN"];
        $UNIT = $_POST ["UNIT"];

        $query = mysqli_query ($db, "UPDATE buku SET NAMA='$NAMA', ISBN='$ISBN', UNIT='$UNIT' WHERE id=$ID");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Buku</title>
</head>
<body>
    <h1>From Edit Buku</h1>

    <form action="" method="POST">
        <label for="NAMA">Nama Buku</label>
        <input value="<?php echo $buku ['NAMA'] ?>" type="text" id="NAMA" name="NAMA">

        <br>
        <br>

        <label for="ISBN">ISBN</label>
        <input value="<?php echo $buku ['ISBN'] ?>" type="text" id="ISBN" name="ISBN">

        <br>
        <br>

        <label for="UNIT">Unit</label>
        <input value="<?php echo $buku ['UNIT'] ?>" type="number" id="UNIT" name="UNIT">

        <br>
        <br>

        <button type = "submit" name = "submit">SUBMIT</button>
    </form>

    <br>
    <a href="./buku.php">Kembali ke Halaman Buku</a>
</body>
</html>