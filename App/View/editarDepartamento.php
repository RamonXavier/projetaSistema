<?php 
require_once "header.php";
$codDepartamento = $_GET['codigo'];
$_GET['formGet'] = 'alterar';
$departamento = require_once "../Controller/DepartamentoController.php";
?>

<div class="container">
    <div class="col-md-12" id="div_form">
        <form action="../Controller/DepartamentoController.php" method="POST">
            <fieldset>
                <legend>Cadastro de Departamento</legend>
                <div class="form-group">
                    <label for="nomeDepartamento">Nome do Departamento</label>
                    <input type="text" class="form-control" id="nomeDepartamento" name="nomeDepartamento" aria-describedby="DepHelp" value="<?= $departamento[0]['nome'] ?>" placeholder="Ex: Engenharia">
                    <small id="DepHelp" class="form-text text-muted">Nome descritivo do novo departamento.</small>
                </div>
                <div class="form-group">
                    <label for="endDepartamento">Endereço do Departamento</label>
                    <input type="text" name="endDepartamento" id="endDepartamento" value="<?= $departamento[0]['endereco'] ?>" class="form-control" placeholder="Rua A, Nº: 1"></input>
                    <small id="DepHelp" class="form-text text-muted">Informe a rua e número do departamento.</small>
                </div>
                <div class="form-group">
                    <input type="hidden" value="editar" name="formPost" id="formPost">
                    <input type="hidden" value="<?= $departamento[0]['cod_depto'] ?>" name="cod_depto" id="cod_depto">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </fieldset>
            </form>
        </div>
    </div>

    <?php 
    require_once "../View/footer.php";
    ?>