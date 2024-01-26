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

$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

$conn->close();

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
                <center>
                    <h1>Editar dados</h1>
                </center>
                <br>
                <table class='table'>
                    <tr>
                        <td>id</td>
                        <td>Código de barras</td>
                        <td>Descrição</td>
                        <td>Valor</td>
                        <td>Categoria</td>
                    </tr>

                    <?php if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $row['cod_produto'] ?></td>
                                <td><?php echo $row['cod_barras'] ?></td>
                                <td><?php echo $row['descricao_produto'] ?></td>
                                <td><?php echo $row['v_unit_produto'] ?></td>
                                <td><?php echo $row['CATEGORIAS_cod_categoria'] ?></td>
                                <td><a class="btn btn-success" href="editarp.php?cod_produto=<?php echo $row['cod_produto'] ?>">Editar</a></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>