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
            <th colspan="2">
                <button id="open-add">Adicionar Novo</button>
                <div id="fade1" class="hide"></div>
                <div id="modal1" class="hide">
                    <div class="modal-header">
                        <h2>Adicione novos dados</h2>
                        <button id="close-add">Fechar</button>
                    </div>
                    <div class="modal-body">
                        <form action="add_controller.php" method="post" enctype="multipart/form-data">
                            <label for="marca">Marca:</label>
                            <input type="text" name="marca" id="marca">
                            <label for="modelo">Modelo:</label>
                            <input type="text" name="modelo" id="modelo">
                            <label for="ano">Ano:</label>
                            <input type="number" name="ano" id="ano">
                            <label for="imagem">Selecione uma imagem:</label>
                            <input type="file" name="imagem" id="imagem">
                            <input type="submit" value="Cadastrar Novo">
                        </form>
                    </div>
                </div>
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
                    <a href="edite.php?id=<?= $p['id_carro']; ?>">Editar</a>

                </td>
                <td class="icon delete cont">
                    <a href="delete.php?id=<?= $p['id_carro']; ?>" style="color:red;">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <button id="open-edite">Editar</button>
    <div id="fade2" class="hide"></div>
    <div id="modal2" class="hide">
        <div class="modal-header">
            <h2>Edite od dados</h2>
            <button id="close-edite">Fechar</button>
        </div>
        <div class="modal-body">
            <form action="edite_controller.php?id=<?= $p['id_carro']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $id_carro ?>">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" value="<?= $carro->marca; ?>">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" value="<?= $carro->modelo; ?>">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano" value="<?= $carro->ano; ?>">
                <label for="imagem">Selecione uma nova imagem:</label>
                <img src="data:image/png;charset=utf8;base64, <?= base64_encode($carro->imagem); ?>" width="200px">
                <input type="file" name="imagem" id="imagem">
                <input type="submit" value="Atualizar">
            </form>
        </div>
    </div>

</main>

<?php
require_once "footer.php" ?>