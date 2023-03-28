<?php
require_once 'carros.php';

$id_carro = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$info = $_POST['info'];
if (!empty($_FILES['imagem']['tmp_name'])) {
    $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
}


try {
    $carro = new Carros($id_carro);
    $carro->marca = $marca;
    $carro->modelo = $modelo;
    $carro->ano = $ano;
    $carros->info = $info;
    $carro->imagem = $imagem;
    $carro->update();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
