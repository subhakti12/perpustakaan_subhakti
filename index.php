<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi perpustakaan</title>
</head>
<body>
    <h1>APLIKASI PERPUSTAKAAN</h1>
    <a href="buku.php">Daftar Buku</a>
    <br>
    <br>
    <a href="staff.php">Daftar Staff</a>

    <form action="logout_proccess.php" method="POST">
        <br>
    <button type="submit">LOGOUT</button>
</body>
</html>