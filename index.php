<?php
require_once "header.php" ?>

<main>
    <table>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Imagem</th>
            <th>Descrição</th>
            <th colspan="2">
                <form action="add_controller.php" method="post" enctype="multipart/form-data">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Adicionar Novo
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="marca">Marca:</label>
                                    <input type="text" name="marca" id="marca">
                                    <label for="modelo">Modelo:</label>
                                    <input type="text" name="modelo" id="modelo">
                                    <label for="ano">Ano:</label>
                                    <input type="number" name="ano" id="ano">
                                    <label for="imagem">Selecione uma imagem:</label>
                                    <input type="file" name="imagem" id="imagem" multiple>
                                    <div id="preview"></div>
                                    <label for="info">Escreva uma descrição do carro incherido</label>
                                    <input type="text" name="info" id="info">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Cadastrar Novo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </th>
        </tr>
        <?php foreach ($list as $p) : ?>
            <tr>
                <td><?= $p['id_carro']; ?></td>
                <td><?= $p['marca']; ?></td>
                <td><?= $p['modelo']; ?></td>
                <td><?= $p['ano']; ?></td>
                <td><img src="data:image/wedp;charset=utf8;base64, <?= base64_encode($p['imagem']); ?>" width="200px"></td>
                <td><?= $p['info']; ?></td>
                <td class="icon edit cont">
                    <a href="edite.php?id=<?= $p['id_carro']; ?>" class="btn btn-primary">Editar</a>
                </td>
                <td class="icon delete cont">
                    <a href="delete.php?id=<?= $p['id_carro']; ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php
require_once "footer.php" ?>