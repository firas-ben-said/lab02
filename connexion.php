<?php
$db_root = 'root';
$db_password = '';
try {

    $db = new PDO('mysql:host=localhost;dbname=users_db', $db_root, $db_password);
} catch (PDOException $e) {
    echo "error connexion with database";

}
?>