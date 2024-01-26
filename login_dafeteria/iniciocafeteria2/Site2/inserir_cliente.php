<?php
session_start();
$nome_cliente = $_POST["nome_cliente"];
$cpf_cliente = $_POST["cpf_cliente"];
$ceclular_cliente = $_POST["ceclular_cliente"];

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

$sql = "INSERT INTO clientes ( nome_cliente, cpf_cliente, ceclular_cliente)
    VALUES ('$nome_cliente', '$cpf_cliente', '$ceclular_cliente')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$id_cliente = $conn -> insert_id;

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y/m/d');
$time = date('H:i:s');
$sql = "INSERT INTO pedidos (mesa_pedido, cliente_pedido, data_pedido, hora_pedido, atendente_pedido, valor_total_pedido, CLIENTES_cod_cliente, MESAS_cod_mesa, ATENDENTES_cod_atendente )
    VALUES ('{$_POST['mesas']}', '$nome_cliente', '$date', '$time', '{$_SESSION['id_atende']}', 0, '$id_cliente', '{$_POST['mesas']}', '{$_SESSION['id_atende']}')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$id_pedido = $conn -> insert_id;

$conn->close();
header("Location: cardapio.php?cod_pedido=$id_pedido");
?>