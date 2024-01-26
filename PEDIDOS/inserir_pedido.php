<?php
    $mesa_pedido = $_POST["mesa_pedido"];
    $cliente_pedido = $_POST["cliente_pedido"];
    $data_pedido = $_POST["data_pedido"];
    $hora_pedido = $_POST["hora_pedido"];
    $atendente_pedido = $_POST["atendente_pedido"];

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

    $sql = "INSERT INTO pedidos (mesa_pedido, cliente_pedido, data_pedido, hora_pedido, atendente_pedido)
    VALUES ('$mesa_pedido', '$cliente_pedido', '$data_pedido', '$hora_pedido', '$atendente_pedido')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    // header('Location: botoespd.php');
?>