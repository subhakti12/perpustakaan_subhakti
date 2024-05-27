<?php
    include_once("./connect.php");

    $ID = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE ID = $ID");

    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST ["submit"])) {
        $NAMA = $_POST ["NAMA"];
        $WHATSAPP = $_POST ["WHATSAPP"];
        $EMAIL = $_POST ["EMAIL"];

        $query = mysqli_query ($db, "UPDATE staff SET NAMA='$NAMA', WHATSAPP='$WHATSAPP', EMAIL='$EMAIL' WHERE id='$ID'");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Staff</title>
</head>
<body>
    <h1>From Edit Staff</h1>

    <form action="" method="POST">
        <label for="NAMA">Nama Staff</label>
        <input value="<?php echo $staff ['NAMA'] ?>" type="text" id="NAMA" name="NAMA">

        <br>
        <br>

        <label for="WHATSAPP">WHATSAPP</label>
        <input value="<?php echo $staff ['WHATSAPP'] ?>" type="text" id="WHATSAPP" name="WHATSAPP">

        <br>
        <br>

        <label for="EMAIL">EMAIL</label>
        <input value="<?php echo $staff ['EMAIL'] ?>" type="EMAIL" id="EMAIL" name="EMAIL">

        <br>
        <br>

        <button type = "submit" name = "submit">SUBMIT</button>
    </form>

    <br>
    <a href="./staff.php">Kembali ke Halaman Staff</a>
</body>
</html>