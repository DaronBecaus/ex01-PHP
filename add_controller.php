<?php
require_once "carros.php";
try {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $carros = new Carros();
    $carros->marca = $marca;
    $carros->modelo = $modelo;
    $carros->ano = $ano;
    $carros->insert();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
