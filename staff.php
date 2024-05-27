<?php
    include_once("./connect.php");
 
    $query = mysqli_query($db, " SELECT * FROM staff");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <h1>Daftar Staff</h1>

    <table border="1">
        <tr>
            <td>NAMA</td>
            <td>WHATSAPP</td>
            <td>EMAIL</td>
            <td>ACTION</td>
        </tr>

        <?php foreach ($query as $staff) { ?>
            <tr>
                <td><?php echo $staff["NAMA"] ?></td>
                <td><?php echo $staff["WHATSAPP"] ?></td>
                <td><?php echo $staff["EMAIL"] ?></td>
                <td>
                    <a href=<?php echo "edit_staff.php?id=" . $staff["ID"] ?>>EDIT</a>
                    <a href=<?php echo "delete_staff.php?id=" . $staff["ID"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="./tambah_staff.php">Tambah Staff Baru</a>

    <br>
    <br>
    <a href="./index.php">Kembali ke halaman utama</a>
</body>
</html>