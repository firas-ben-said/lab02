<?php
session_start();
require "../connexion.php";
//..

$req = $db->prepare("DELETE FROM `users` WHERE id = $id;");
$req->execute();
header('location:index.php');


?>
