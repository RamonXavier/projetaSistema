<?php 

$_POST['formPost'] = 'listar';
$listarDepartamentos = require_once "../Controller//DepartamentoController.php";

$_POST['formPost'] = 'listar';
$listarProjetos = require_once "../Controller/ProjetoController.php";
require_once "header.php";
?>

<div class="container">
    <div class="col-md-12" id="div_form">
        <form action="../Controller/EmpregadoController.php" method="POST">
            <fieldset>
                <legend>Cadastro de Empregado</legend>
                <div class="form-group">
                    <label for="nomeEmpregado">Nome do Empregado</label>
                    <input type="text" class="form-control" id="nomeEmpregado" name="nomeEmpregado" aria-describedby="EmpHelp" placeholder="Nome Empregado">
                    <small id="EmpHelp" class="form-text text-muted">Nome descritivo do novo Empregado.</small>
                </div>
                <div class="form-group">
                    <label for="cpfEmpregado">CPF do Empregado</label>
                    <input type="text" class="form-control" id="cpfEmpregado" name="cpfEmpregado"  aria-describedby="EmpHelp" placeholder="Ex: 877.000.000-88">
                    <small id="EmpHelp" class="form-text text-muted">Informe o número de CPF do empregado.</small>
                </div>
                <div class="form-group">
                    <label for="rgEmpregado">RG do Empregado</label>
                    <input type="text" class="form-control" id="rgEmpregado" name="rgEmpregado"  aria-describedby="EmpHelp" placeholder="Ex: Mg 123456">
                    <small id="EmpHelp" class="form-text text-muted">Informe o número de RG do empregado.</small>
                </div>
                <div class="form-group">
                    <label for="end_empregado">Endereço do Empregado</label>
                    <input type="text" name="end_empregado" id="end_empregado" class="form-control" placeholder="Rua: Amido, Nº 1, Cidade: Juiz de fora, Estado: MG, bairro, Cascatinha"></input>
                    <small id="DepHelp" class="form-text text-muted">Informe a rua, cidade, bairro, estado e número do empregado.</small>
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
                    <label for="selectProj">Informe os projetos que o Empregado está alocado</label>
                    <select multiple="multiple" class="form-control" id="selectProj" name="selectProj[]">
                        <?php foreach ($listarProjetos as $key => $value) { ?>                        
                            <option value="<?= $value['codigo']?>"><?= $value['descricao']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cargahoraria" id="cargahoraria1" value="125" checked>
                    <label class="form-check-label" for="cargahoraria1">
                        125 horas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cargahoraria" id="cargahoraria2" value="251">
                    <label class="form-check-label" for="cargahoraria2">
                        251 horas
                    </label>
                </div>
                <div class="form-group">
                    <input type="hidden" name="formPost" value="salvar">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </fieldset>
            </form>
        </div>
    </div>

    <?php 
    require_once "../View/footer.php";
    ?>