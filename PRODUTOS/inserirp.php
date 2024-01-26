<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nextstage_bookcoffee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    #cf {
        border-radius: 15px;
        background-color: #323736;
        align-items: center;
        padding: 30px;
        margin: 180px auto;
        color: white;
        margin-top: 140px;
        width: 60px;
    }

    #botaoc:hover {
        background-color: black;
    }

    #botaoc {
        background-color: #323736;
        /* Green */
        border: none;
        color: white;
        padding: 6px 22px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        /* margin: 4px 2px; */
        cursor: pointer;
        border-color: white;
        border-style: groove;
        border-width: 1px;
    }

    .container {
        width: 50%;
    }

    .menu {
        margin-top: 2rem;
    }

    .menu a {
        margin-right: 1.5rem;
        text-decoration: none;
        color: white;
    }
    </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-3">

        <form action="inserir_produto.php" method="post">
          <div class="mb-3">

            <label for="cod_barras" class="form-label">Código de barras</label>
            <input type="text" class="form-control" id="cod_barras" name="cod_barras">

            <label for="descricao_produto" class="form-label">Descrição do produto</label>
            <input type="text" class="form-control" id="descricao_produto" name="descricao_produto">

            <label for="v_unit_produto" class="form-label">Valor do produto</label>
            <input type="text" class="form-control" id="v_unit_produto" name="v_unit_produto">

            <select name="CATEGORIAS_cod_categoria">
              <option value="">Selecione</option>
              <?php
              $sql = "SELECT * FROM categorias";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo $row['cod_categoria'] ?>"><?php echo $row['descricao_categoria'] ?></option>
              <?php } ?>
            </select>

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

  <script>
    $('#v_unit_produto').mask('000.00', {reverse: true});
  </script>
</body>

</html>