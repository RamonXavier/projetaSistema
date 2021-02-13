<?php
require_once "../../vendor/autoload.php";
require_once "header.php";
?>
<br>
<center>
<div class="container">
    <h1>Sistema Projeta</h1>
</div>
<p>
    Sistema de gestão de empregados, departamentos e projetos.
</p>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" style="width: 18rem; height:20rem">
                <img class="card-img-top" src="../img/3.jpg" alt="Card image cap" tyle="height: 200px; width: 280px;">
            <div class="card-body">
                <h5 class="card-title">Empregados</h5>
                <p class="card-text">Gestão de empregados.</p>
                <a href="cadastroEmpregado.php" class="btn btn-primary">Acessar</a>
            </div>
        </div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem; height:20rem">
                <img class="card-img-top" src="../img/2.jpg" alt="Card image cap" style="height: 150px; width: 280px;">
            <div class="card-body">
                <h5 class="card-title">Departamentos</h5>
                <p class="card-text">Gestão de departamentos.</p>
                <a href="cadastroDepartamento.php" class="btn btn-primary">Acessar</a>
            </div>
        </div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem; height: 20rem;">
                <img class="card-img-top" src="../img/1.jpg" alt="Card image cap" style="height: 150px; width: 280px;">
            <div class="card-body">
                <h5 class="card-title">Projetos</h5>
                <p class="card-text">Gestão de projetos.</p>
                <a href="cadastroProjeto.php" class="btn btn-primary">Acessar</a>
            </div>
        </div>
    </div>
  </div>
</div>
</center>
<?php
require_once "footer.php";