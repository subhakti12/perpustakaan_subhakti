<?php

session_start();

include_once("./connect.php");


if (isset($_POST['email']) && isset($_POST['password'])) {
    $emailnya = $_POST['email'];
    $passwordnya = $_POST['password'];

    $sql_query = "SELECT * FROM users WHERE email='$emailnya'";
    $result = mysqli_query($db, $sql_query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

            if (password_verify($passwordnya, $row['password'])) {
                $_SESSION['email'] = $emailnya;
                header("Location: index.php");
                exit;
            } else {
                echo "Password salah";
            }
    } else {
        echo "Email tidak ditemukan";
    }
}
