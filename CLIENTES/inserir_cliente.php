<?php
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

    $conn->close();
    header('Location: botoes.php');
?>