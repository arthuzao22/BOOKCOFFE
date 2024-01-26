
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>body{margin-top: 50px}</style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-4">
                <h4>Alterar categoria</h4>                
                <form action="editar_categoria.php" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="cod_categoria" value="<?php echo $_GET['cod_categoria']?>">

                        <label for="descricao_categoria" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descricao_categoria" name="descricao_categoria">
                    </div>
                    
                    <input type="submit" class="btn btn-success" value="Editar">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>