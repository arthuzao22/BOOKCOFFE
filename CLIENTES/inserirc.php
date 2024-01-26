<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-4">

      </div>
      <form action="inserir_cliente.php" method="post">
        <div class="mb-3">

          <label for="nome_cliente" class="form-label">nome</label>
          <input type="text" class="form-control" id="nome_cliente" name="nome_cliente">

          <label for="cpf_cliente" class="form-label">cpf</label>
          <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente">

          <label for="ceclular_cliente" class="form-label">celular</label>
          <input type="text" class="form-control" id="ceclular_cliente" name="ceclular_cliente">

        </div>
        <input type="submit" class="btn btn-success" value="Avaliar">

      </form>
    </div>

  </div>
  </div>
  </div>

  <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
  <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <script>
     $('#cpf_cliente').mask('000.000.000-00', {reverse: true});
     $('#ceclular_cliente').mask('(00) 0000-0000');
  </script>
</body>

</html>