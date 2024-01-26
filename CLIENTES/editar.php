
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>body{margin-top: 50px}</style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-4">
                <h4>Alteracao de dados via php</h4>                
                <form action="editar_cliente.php" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="cod_cliente" value="<?php echo $_GET['cod_cliente']?>">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>