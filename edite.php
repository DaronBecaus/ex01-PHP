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
    <form action="edite_controller.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id_carro ?>">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="<?= $carro->marca; ?>">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" value="<?= $carro->modelo; ?>">
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" value="<?= $carro->ano; ?>">
        <label for="imagem">Selecione uma nova imagem:</label>
        <img src="data:image/jpg;charset=utf8;base64, <?= base64_encode($carro->imagem); ?>" width="200px">
        <input type="file" name="imagem" id="imagem">
        <input type="submit" value="Atualizar">
    </form>
</body>

</html>