<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-3">

        <form action="inserir_categoria.php" method="post">
          <div class="mb-3">

            <label for="descricao_categoria" class="form-label">Descrição</label>
            <select name="descricao_categoria" id="descricao_categoria">
              <option value=""></option selected>
              <option value="Pães">Pães</option>
              <option value="Bolos">Bolos</option>
              <option value="Bebidas">Bebidas</option>
              <option value="Doces">Doces</option>
              <option value="Cafés">Cafés</option>
            </select>

          </div>
          <input type="submit" class="btn btn-success" value="Inserir">

        </form>
      </div>

    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>