<?php

require_once "carros.php";
try {
    $list = Carros::list();
} catch (Exception $e) {
    echo $e->getMessage();
};
try {
    if (isset($_GET['id'])) {
        $id_carro = $_GET['id'];
        $carro = new Carros($id_carro);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Tabela de Carros</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Tabela de Carros</a>
            <a href="galeria.php">Galeria de Carros</a>
        </nav>
    </header>