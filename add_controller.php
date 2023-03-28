<?php
require_once "carros.php";
try {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $info = $_POST['info'];
    if (!empty($_FILES['imagem']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    }
    $carros = new Carros();
    $carros->marca = $marca;
    $carros->modelo = $modelo;
    $carros->ano = $ano;
    $carros->imagem = $imagem;
    $carros->info = $info;
    $carros->insert();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
