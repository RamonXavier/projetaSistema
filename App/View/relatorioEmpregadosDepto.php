<?php 
require_once "header.php";
$_POST['formPost'] = 'listarRel';
$listarDepartamentos = require_once "../Controller//DepartamentoController.php";
$listagem = require_once "../Controller/EmpregadoController.php";
?>
<div class="container">
<div class="div_center">
    <table class="table table-striped table-secondary">
        <thead>
            <tr>
                <th>Quantidade Empregados</th>
                <th>Nome Emp</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($listarDepartamentos as $key => $value) {?>
            <tr>
                <td><?= $value['qtde']?></td>
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