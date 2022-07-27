<!DOCTYPE html>
<html lang="pt-br" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/layout.css" />

    <title>Cursos</title>
  </head>
<body class="d-flex flex-column h-100">

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">EDSON MAIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listar-cursos">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listar-usuarios">Usuários</a>
        </li>
      </ul>

      <a href="#" class="btn btn-danger">Sair</a>

    </div>
  </div>
</nav>
</header>

<main class="flex-shrink-0">

<div class="container">

    <h1>Cadastrar Curso</h1>

    <form action="" method="POST">
    
        <div class="mb-3">
            <label for="nomeCurso" class="form-label">Nome do Curso</label>
            <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" autofocus >
        </div>

        <div class="mb-3">
            <label for="chCurso" class="form-label">CH Curso</label>
            <input type="number" class="form-control" id="chCurso" step="1" min="1" max="5000" name="chCurso">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
        </div>
    
    </form>

</div> <!-- fim div class container -->

</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Produzido por Edson Maia</span>
  </div>
</footer>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>