<?php
require '../model/db-connection.php';

$connexio = getConnection();
$sentencia1 = $connexio->prepare("SELECT nickname FROM users WHERE admin IS NULL ");
$sentencia1->execute();
$noAdmins1 = $sentencia1->fetchAll(PDO::FETCH_OBJ);
$sentencia2 = $connexio->prepare("SELECT nickname FROM users WHERE admin=0");
$sentencia2->execute();
$noAdmins2 = $sentencia2->fetchAll(PDO::FETCH_OBJ);

foreach ($noAdmins1 as $noAd1) { 
         echo $noAd1;
}

foreach ($noAdmins2 as $noAd2) { 
    echo $noAd2;
}
 
 


