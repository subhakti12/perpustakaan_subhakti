<?php
    include_once("./connect.php");

    $ID = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM buku WHERE ID = $ID");

    header ("Location: buku.php");