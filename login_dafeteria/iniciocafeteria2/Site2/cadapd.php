<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nextstage_bookcoffee";

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die ('erro ao tentar se conectar');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM produtos where cod_produto = {$_GET['id_produto']}";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

    $subtotal = intval($_GET['qtde']) * intval($row['v_unit_produto']);

    $sql = "INSERT INTO `itens_pedidos`(`qtde`, `produto`, `v_unit`, `sub_total`, `PEDIDOS_cod_pedido`, `PRODUTOS_cod_produto`) 
    VALUES ('{$_GET['qtde']}','{$row['descricao_produto']}','{$row['v_unit_produto']}','$subtotal','{$_GET['id_pedido']}','{$_GET['id_produto']}')";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM `pedidos` WHERE cod_pedido = '{$_GET['id_pedido']}'";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

    $total = intval($row['valor_total_pedido']) + $subtotal;

    $sql = "UPDATE `pedidos` SET `valor_total_pedido`='$total' WHERE cod_pedido = '{$_GET['id_pedido']}'";
    mysqli_query($conn, $sql);

    header("Location: cardapio.php?cod_pedido={$_GET['id_pedido']}")
?>