<?php
$cod_produto = $_POST['cod_produto'];
$cod_barras = $_POST["cod_barras"];
$descricao_produto = $_POST["descricao_produto"];
$v_unit_produto = $_POST["v_unit_produto"];
$CATEGORIAS_cod_categoria = $_POST['CATEGORIAS_cod_categoria'];

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

$sql = "SELECT * FROM produtos WHERE cod_produto='$cod_produto'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["cod_produto"] . " - Código de barras: " . $row["cod_barras"] . " - Descrição: " . $row["descricao_produto"] . " - Valor:" . $row["v_unit_produto"] . " - Categoria: " . $row["CATEGORIAS_cod_categoria"];
    }
} else {
    echo "0 results";
}

$atualizar = mysqli_query($conn, "UPDATE produtos SET cod_barras='$cod_barras', descricao_produto='$descricao_produto', v_unit_produto='$v_unit_produto', CATEGORIAS_cod_categoria='$CATEGORIAS_cod_categoria' WHERE cod_produto='$cod_produto'") or die(mysql_error());

($atualizar) ? print 'Dados alterados com sucesso' : die('Falha ao alterar dados');

$conn->close();
header('Location: listarp.php');