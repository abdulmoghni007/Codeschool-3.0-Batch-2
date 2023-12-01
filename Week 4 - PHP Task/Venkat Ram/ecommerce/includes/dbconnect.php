<?php

$dsn = "pgsql:host=localhost;dbname=ecommercedb";
$dbuser = "postgres";
$dbpass = "venkatram";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Error <br><br>{$e->getMessage()}";
}
