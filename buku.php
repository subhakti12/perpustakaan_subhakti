<?php
    include_once("./connect.php");
 
    $query = mysqli_query($db, " SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border="1">
        <tr>
            <td>NAMA</td>
            <td>ISBN</td>
            <td>UNIT</td>
            <td>ACTION</td>
        </tr>

        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["NAMA"] ?></td>
                <td><?php echo $buku["ISBN"] ?></td>
                <td><?php echo $buku["UNIT"] ?></td>
                <td>
                    <a href=<?php echo "edit_buku.php?id=" . $buku["ID"] ?>>EDIT</a>
                    <a href=<?php echo "delete_buku.php?id=" . $buku["ID"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="./tambah_buku.php">Tambah Buku Baru</a>

    <br>
    <br>
    <a href="./index.php">Kembali ke Halaman Utama</a>
</body>
</html>