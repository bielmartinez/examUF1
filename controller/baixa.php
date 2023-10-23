<?php
//Ex 6 Aquest arxiu controla el formulari, en cas de no voler donarse de baixa retornar al inici i en cas de voler tramita la baixa
$baixa = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $baixa = $_POST["baixa"];
        if($baixa=="si") {
            header("Location:./baixaDefinitiva.php");
        } elseif($baixa=="no") {
            header("Location:./index.php");
        }
    }

require_once '../view/baixa.view.php';