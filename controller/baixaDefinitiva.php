<?php
require_once '../controller/session.php';

//Ex 6 Aquest fitxer elimina l'usuari de la base de dades junt amb la seva sessio i l'envia al inici
session_start();
$userId = getSessionUserId();

try {
$connexio = getConnection();
$sentencia = $connexio->prepare("DELETE FROM users WHERE id = :userId; ");
$sentencia->bindParam('userId', $userId, PDO::PARAM_INT);

$sentencia->execute();

} catch (PDOException $e) {
    die("No es pot establir connexió amb la base de dades");
}

session_destroy();
header("Location:./index.php")




?>