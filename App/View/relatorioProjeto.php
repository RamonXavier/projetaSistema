<?php 
require_once "header.php";
$_POST['formPost'] = 'listar';
$listagem = require_once "../Controller/ProjetoController.php";
?>
<div class="container">
    <div class="div_center">
        <table class="table table-striped table-secondary">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Cod. Depto</th>
                    <th>Desc. Depto</th>
                    <th>Endereço Depto</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($listagem as $key => $value) {?>
                <tr>
                    <td><?= $value['codigo']?></td>
                    <td><?= $value['descricao']?></td>
                    <td><?= $value['cod_depto']?></td>
                    <td><?= $value['nome']?></td>
                    <td><?= $value['endereco']?></td>
                    <td><a href="../Controller/ProjetoController.php?formGet=excluir&codigo=<?= $value['codigo']?>" class="btn btn-warning">Excluir</a></td>
                    <td><a href="editarProjeto.php?formGet=alterar&codigo=<?= $value['codigo']?>" class="btn btn-primary">Editar</a></td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>



<?php 
require_once "../View/footer.php";
?>