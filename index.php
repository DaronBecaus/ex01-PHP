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
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar Novo Carro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body container">
                                    <div class="mb-3">
                                        <label for="marca" class="form-label">Marca</label>
                                        <input type="text" class="form-control" name="marca" id="marca" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="modelo" class="form-label">Modelo</label>
                                        <input type="text" class="form-control" name="modelo" id="modelo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ano" class="form-label">Ano</label>
                                        <input type="number" class="form-control" name="ano" id="ano" required maxlength="4">
                                    </div>
                                    <div class="mb-3">
                                        <label for="imagem" class="form-label">Selecione uma imagem:</label>
                                        <input class="form-control" type="file" name="imagem" id="imagem" accept="image/*">
                                    </div>
                                    <div>
                                        <h5 for="imagem" class="form-label">Imagem Selecionada</h5>
                                        <img id="imagemSelecionada" src="#" alt="Imagem selecionada" width="200px">
                                    </div>
                                    <div class="mb-3">
                                        <label for="info" class="form-label">Escreva uma descrição do carro incherido</label>
                                        <textarea class="form-control" id="info" name="info" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a href="index.php" target="_parent" style="text-decoration: none; color:white;">Fechar</a></button>
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