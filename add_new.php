<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo</title>
</head>

<body>
    <form action="add_controller.php" method="post">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo">
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano">
        <input type="submit" value="Cadastrar Novo">
    </form>
</body>

</html>