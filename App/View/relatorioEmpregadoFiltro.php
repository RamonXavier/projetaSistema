<?php 
require_once "header.php";
$_GET['formGet'] = 'listarFiltro';
$_GET['buscaEmp'] = $_GET['buscaEmp'];
$listagem = require_once "../Controller/EmpregadoController.php";
?>
<div class="container">
    <div class="div_center">
        <table class="table table-striped table-secondary">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome Emp</th>
                    <th>Endereço</th>
                    <th>Rg</th>
                    <th>CPF</th>
                    <th>Cod Depto</th>
                    <th>Nome Depto</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($listagem as $key => $value) {?>
                <tr>
                    <td><?= $value['mat']?></td>
                    <td><?= $value['nome_emp']?></td>
                    <td><?= $value['endereco']?></td>
                    <td><?= $value['rg']?></td>
                    <td><?= $value['cpf']?></td>
                    <td><?= $value['cod_depto']?></td>
                    <td><?= $value['nome']?></td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>
<?php 
require_once "../View/footer.php";
?>