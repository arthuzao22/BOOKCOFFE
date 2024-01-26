<?php
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

    $sql = "INSERT INTO produtos (cod_barras, descricao_produto, v_unit_produto, CATEGORIAS_cod_categoria)
    VALUES ('$cod_barras', '$descricao_produto', '$v_unit_produto', '$CATEGORIAS_cod_categoria')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: botoesp.php');