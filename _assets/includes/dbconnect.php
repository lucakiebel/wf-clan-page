<?php
require_once '../config.php';

function connectDatabase($query)
{
    try {
        $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully!";

        $sql = $query;

        $conn->exec($sql);

    } catch (PDOException $exception) {
        echo "Connection failed: " . $exception->getMessage();
    }

    $conn = null;
}