<?php require_once "header.php"; ?>

<main>
    <table>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Imagem</th>
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
                <td><img src="data:image/png;charset=utf8;base64, <?= base64_encode($p['imagem']); ?>" width="200px"></td>
                <td class="icon edit cont">
                    <a href="edite.php?id=<?= $p['id_carro']; ?>" style="color:blue;">Editar</a>
                </td>
                <td class="icon delete cont">
                    <a href="delete.php?id=<?= $p['id_carro']; ?>" style="color:red;">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php require_once "footer.php"; ?>