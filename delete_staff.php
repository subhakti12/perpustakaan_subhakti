<?php
    include_once("./connect.php");

    $ID = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM staff WHERE ID = $ID");

    header ("Location: staff.php");