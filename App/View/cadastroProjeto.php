<?php 
require_once "header.php";
$_POST['formPost'] = 'listar';
$listarDepartamentos = require_once "../Controller//DepartamentoController.php";
?>

<div class="container">
    <div class="col-md-12" id="div_form">
        <form action="../Controller/ProjetoController.php" method="POST">
            <fieldset>
                <legend>Cadastro de Projetos</legend>
                <div class="form-group">
                    <label for="descProj">Descrição do Projeto</label>
                    <input type="text" class="form-control" id="descProj" name="descProj" aria-describedby="ProjHelp" placeholder="Ex: Engenharia Estrutural">
                    <small id="ProjHelp" class="form-text text-muted">Nome descritivo do novo projeto.</small>
                </div>
                <div class="form-group">
                    <label for="selectDep">Selecione um departamento</label>
                    <select class="form-control" id="selectDep" name="selectDep">
                        <?php foreach ($listarDepartamentos as $key => $value) { ?>                        
                            <option value="<?= $value['cod_depto']?>"><?= $value['nome']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="formPost" id="formPost" value="salvar" >
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </fieldset>
            </form>
        </div>
    </div>

    <?php 
    require_once "../View/footer.php";
    ?>