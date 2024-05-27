<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER AKUN BARU</title>
</head>

<body>

    <h2>REGISTER AKUN</h2>

    <form action="./register_proccess.php" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">

        <br>
        <br>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <br>
        <br>

        <button type="submit" name="submit">Register</button>
        
    </form>
</body>

</html>