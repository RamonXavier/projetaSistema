<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeta System</title>
    <link href="../Structure/Css/bootstrap.min.css"  rel="stylesheet">
    <link href="../Structure/Css/styleGeral.css"  rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Projeta System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Relatórios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="relatorioDepartamento.php">Listagem de Departamento</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorioProjeto.php">Listagem de Projetos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorioEmpregadosProjeto.php">Empregados por Projeto</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorioEmpregadosDepto.php">Qtde Empregados por Departamento</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="cadastroProjeto.php">Projetos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastroDepartamento.php">Departamentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastroEmpregado.php">Empregados</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cadastroDependente.php">Depentendes Financeiros</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
    <form class="form-inline my-4 my-lg-0" action="relatorioEmpregadoFiltro.php" method="GET">
      <input class="form-control mr-sm-4" type="text" placeholder="Busca rápida de empregados" name="buscaEmp" >
      <input type="hidden" name="formGet" value="listarFiltro">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button><br>
      <span style="font-size: 7px; margin-left: 5px;">Atenção, texto Case Sensitive</span>
    </form>
  </div>
</nav>