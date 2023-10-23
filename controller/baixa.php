<?php
$baixa = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $baixa = $_POST["baixa"];
        echo $baixa;
        if($baixa=="si") {
            header("Location:./baixaDefinitiva.php");
        } elseif($baixa=="no") {
            header("Location:./index.php");
        }
    }

require_once '../view/baixa.view.php';