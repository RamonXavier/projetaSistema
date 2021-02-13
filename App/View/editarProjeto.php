<?php 
require_once "header.php";
$codDepartamento = $_GET['codigo'];
$_GET['formGet'] = 'alterar';
$projeto = require_once "../Controller/ProjetoController.php";

$_POST['formPost'] = 'listar';
$listarDepartamentos = require_once "../Controller//DepartamentoController.php";
// echo '<pre>';
// print_r($projeto);
// echo '</pre>';
?>

<div class="container">
    <div class="col-md-12" id="div_form">
            <form action="../Controller/ProjetoController.php" method="POST">
                <fieldset>
                    <legend>Cadastro de Projetos</legend>
                    <div class="form-group">
                        <label for="descProj">Descrição do Projeto</label>
                        <input type="text" value="<?= $projeto[0]['descricao']?>" class="form-control" id="descProj" name="descProj" aria-describedby="ProjHelp" placeholder="Ex: Engenharia Estrutural">
                        <small id="ProjHelp" class="form-text text-muted">Nome descritivo do novo projeto.</small>
                    </div>
                    <div class="form-group">
                        <label for="selectDep">Selecione um departamento</label>
                        <select class="form-control" id="selectDep" name="selectDep">
                        <?php foreach ($listarDepartamentos as $key => $value) { 
                                if ($value['cod_depto'] == $projeto[0]['cod_depto']) {?>
                                <option value="<?= $projeto[0]['cod_depto']?>"selected><?= $projeto[0]['nome']?></option>    # code...
                               <?php } else { ?>                        
                                <option value="<?= $value['cod_depto']?>"><?= $value['nome']?></option>
                            <?php } 
                        } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="formPost" id="formPost" value="salvar" >
                        <input type="hidden" name="formPost" id="formPost" value="editar" >
                        <input type="hidden" name="codigo" id="codigo" value="<?= $projeto[0]['codigo']?>" >
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <?php 
    require_once "../View/footer.php";
    ?>