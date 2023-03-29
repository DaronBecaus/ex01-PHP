<?php

/* try {
    $conn = new  PDO("mysql:host=localhost;dbname=exphp", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexão feita com sucesso...";
} catch (PDOException $e) {
    echo $e->getMessage();
} */

// echo "<br>";

/* try {
    $conn = new  PDO("mysql:host=localhost;dbname=exphp", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS carros (
        id_carro INT PRIMARY KEY AUTO_INCREMENT,
        marca varchar(255) NOT null,
        modelo varchar(255) NOT null,
        ano INT,
        imagem varchar(255) NOT null
    )";
    $conn->exec($sql);
    echo "tabela criada com sucesso...";
} catch (PDOException $e) {
    echo $e->getMessage();
} */

require_once "carros.php";
try {
    $list = Carros::list();
} catch (Exception $e) {
    echo $e->getMessage();
};
try {
    $id_carro = $_GET['id'];
    $carro = new Carros($id_carro);
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
    <header></header>