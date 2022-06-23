<!doctype html>


<html lang="en">

  <head>
  <title>Cadastro de funcionarios </title>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
          </head>



  <body>


  <nav class="navbar bg-dark">
  <div class="container-fluid">  
    <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página principal</a>
    <a href="funcionarios.php" class="navbar-brand" style="color:white;">Funcionários </a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<center>
<form action="" method="POST">
                <label>Nome: </label><BR>
                <input type="text" name="nome" required><br>

                <Label>Sobrenome: </label><br>
                <Input type="text" name="sobrenome" required><br>

                <label>Cargo: </label><br>
                <input type="number" name="cargo" required><br>
                
                <label>Salário: </label><br>
                <input type="date" name="salario" required><br>

                
                <br><button type="submit">Salvar/Gravar</button><br>

</form>
</center>
</body>


</html>