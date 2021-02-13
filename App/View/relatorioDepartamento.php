<?php 
require_once "header.php";
$_POST['formPost'] = 'listar';
$listagem = require_once "../Controller/DepartamentoController.php";
?>
<div class="container">
    <div class="div_center">
        <table class="table table-striped table-secondary">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($listagem as $key => $value) {?>
                <tr>
                    <td><?= $value['cod_depto']?></td>
                    <td><?= $value['nome']?></td>
                    <td><?= $value['endereco']?></td>
                    <td><a href="../Controller/DepartamentoController.php?formGet=excluir&codigo=<?= $value['cod_depto']?>" class="btn btn-warning">Excluir</a></td>
                    <td><a href="editarDepartamento.php?formGet=alterar&codigo=<?= $value['cod_depto']?>" class="btn btn-primary">Editar</a></td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>



<?php 
require_once "../View/footer.php";
?>