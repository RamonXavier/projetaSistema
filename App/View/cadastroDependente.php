<?php 


$_POST['formPost'] = 'listar';
$listarEmpregados = require_once "../Controller/EmpregadoController.php";

require_once "header.php";
?>

<div class="container">
    <div class="col-md-12" id="div_form">
        <form action="../Controller/DepentendeFinanceiroController.php" method="POST">
            <fieldset>
                <legend>Cadastro de Depentendes Financeiros</legend>
                <div class="form-group">
                    <label for="nomeDependente">Nome do Empregado</label>
                    <input type="text" class="form-control" id="nomeDependente" name="nomeDependente" aria-describedby="DepHelp" placeholder="Ex: Rachel Yuran">
                    <small id="DepHelp" class="form-text text-muted">Nome descritivo do novo Empregado.</small>
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data de nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" placeholder="Ex: 10/12/1998"></input>
                    <small id="DepHelp" class="form-text text-muted">Data de nascimento do dependente.</small>
                </div>
                <div class="form-group">
                    <label for="selectEmp">Selecione o empregado</label>
                    <select class="form-control" id="selectEmp" name="selectEmp">
                        <?php foreach ($listarEmpregados as $key => $value) { ?>                        
                            <option value="<?= $value['mat']?>"><?= $value['nome_emp']?> - <?= $value['mat']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="selectTipo">Selecione o grau de parentesco do depentende</label>
                    <select class="form-control" id="selectTipo" name="selectTipo">
                        <option value="Filho">Filho</option>
                        <option value="Conjuge">Cônjuge</option>
                    </select>
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