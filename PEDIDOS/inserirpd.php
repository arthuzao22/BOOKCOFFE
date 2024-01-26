<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$time = date('H:i:s');
?>

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

        <form action="inserir_pedido.php" method="post">
          <div class="mb-3">

            <label for="mesa_pedido" class="form-label">Informe a mesa</label>
            <input type="text" class="form-control" id="mesa_pedido" name="mesa_pedido">

            <label for="cliente_pedido" class="form-label">Nome do cliente</label>
            <input type="text" class="form-control" id="cliente_pedido" name="cliente_pedido">

            <label for="data_pedido" class="form-label">Data do pedido</label>
            <input type="text" id="data_pedido" name="data_pedido" value=" <?php echo $date ?>">

            <label for="hora_pedido" class="form-label">Hora do pedido</label>
            <input type="text" id="hora_pedido" name="hora_pedido" value="<?php echo $time ?>">

            <label for="atendente_pedido" class="form-label">Nome do atendente</label>
            <input type="text" class="form-control" id="atendente_pedido" name="atendente_pedido">

            <label for="valor_total_pedido" class="form-label">Valor total</label>
            <input type="text" class="form-control" id="valor_total_pedido" name="valor_total_pedido">

          </div>
          <input type="submit" class="btn btn-primary" value="Inserir">
        </form>
      </div>
    </div>
  </div>
  </div>

  <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
  <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>