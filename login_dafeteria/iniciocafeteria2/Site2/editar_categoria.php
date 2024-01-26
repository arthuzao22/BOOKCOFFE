<?php 
    $cod_categoria = $_POST["cod_categoria"];
    $descricao_categoria = $_POST["descricao_categoria"];

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

    $sql = "SELECT * FROM categorias WHERE cod_categoria='$cod_categoria'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cod_categoria"]. " - Descrição: " . $row["descricao_categoria"];
    }
    }else{
    echo "0 results";
    }

    $atualizar = mysqli_query($conn,"UPDATE categorias SET descricao_categoria='$descricao_categoria' WHERE cod_categoria='$cod_categoria'") or die(mysql_error());
    
    ($atualizar) ? print 'Dados alterados com sucesso' : die('Falha ao alterar dados');
    
    $conn->close();
    header('Location: listarctg.php');
?>