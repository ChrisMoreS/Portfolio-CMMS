<?php
    $servername = "localhost";
    $dbname = "PortfolioCMMS";
    $user = "AdminCMMS";
    $pass = "Moreno2.";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    } catch(PDOException $e) {
        echo "User connection failed: " . $e->getMessage();
    }
?>