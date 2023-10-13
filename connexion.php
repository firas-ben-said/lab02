<?php
$db_root = 'root';
$db_password = 'password';
try{

$db  = new PDO('mysql:host=localhost;dbname=lab2',$db_root, $db_password);
}
catch(PDOException $e){
    echo "error connexion with database";

}

