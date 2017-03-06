<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=pb389';
    $username = 'pb389';
    $password = '0ykh9TyW';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
