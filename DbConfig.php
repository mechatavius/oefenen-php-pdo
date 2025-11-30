<?php

$host = "localhost";
$user = "root";
$password = "12Berke-";
$dbname = "genshin";

try{
     $pdo = new PDO("mysql:host = $host; dbname = $dbname;", $user, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "verbonden met databse";
}
catch(PDOException $e){
    echo "verbidning mislukt" . $e->getMessage();

}
?>

