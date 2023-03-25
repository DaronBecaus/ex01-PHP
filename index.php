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
        ano INT
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
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Carros</title>
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>imagem</th>
            <th colspan="2">
                <a href="add_new.php" style="color:green;">Adicionar Novo</a>
            </th>
        </tr>
        <?php foreach ($list as $p) : ?>
            <tr>
                <td><?= $p['id_carro']; ?></td>
                <td><?= $p['marca']; ?></td>
                <td><?= $p['modelo']; ?></td>
                <td><?= $p['ano']; ?></td>
                <td><img src="data:image/jpg;charset=utf8;base64, <?= base64_encode($p['imagem']); ?>" width="200px"></td>
                <td class="icon edit cont">
                    <a href="edite.php?id=<?= $p['id_carro']; ?>" style="color:blue;">Editar</a>
                </td>
                <td class="icon delete cont">
                    <a href="delete.php?id=<?= $p['id_carro']; ?>" style="color:red;">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>