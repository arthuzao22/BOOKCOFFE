<?php
    $nome_atendente = $_POST['nome_atendente'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

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

    $sql = "INSERT INTO atendentes ( nome_atendente, login, senha)
    VALUES ('$nome_atendente', '$login', '$senha')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: index.php');
?>