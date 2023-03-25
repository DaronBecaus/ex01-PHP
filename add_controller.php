<?php
require_once "carros.php";
try {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    if (!empty($_FILES['imagem']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    }
    $carros = new Carros();
    $carros->marca = $marca;
    $carros->modelo = $modelo;
    $carros->ano = $ano;
    $carros->imagem = $imagem;
    $carros->insert();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
