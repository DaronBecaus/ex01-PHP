<?php
require_once "carros.php";
try {
    $id_carro = $_GET['id'];
    $carro = new Carros($id_carro);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="edite_controller.php" method="post">
        <input type="hidden" name="id" value="<? $carro->$id_carro; ?>">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="<?= $carro->marca; ?>">
        <label for="modelo">Modelo:</label>
        <input type="number" name="modelo" id="modelo" value="<?= $carro->modelo; ?>">
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" value="<?= $carro->ano; ?>">
        <input type="submit" value="Atualizar">
    </form>
</body>

</html>