<?php
require_once "carros.php";
$id_carro = $_GET['id'];
try {
    $carro = new Carros($id_carro);
    $carro->delete();
    header('location: index.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
