<?php 
    $cod_cliente=$_POST['cod_cliente'];
    $nome_cliente=$_POST['nome_cliente'];
    $cpf_cliente=$_POST['cpf_cliente'];
    $ceclular_cliente=$_POST['ceclular_cliente'];

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

    $sql = "SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cod_cliente"]. " - Name: " . $row["nome_cliente"]."<br>";
    }
    }else{
    echo "0 results";
    }

    $atualizar = mysqli_query($conn,"UPDATE clientes SET nome_cliente='$nome_cliente', cpf_cliente='$cpf_cliente', ceclular_cliente='$ceclular_cliente' WHERE cod_cliente='$cod_cliente'")or die(mysql_error());
    
    ($atualizar) ? print 'Dados alterados com sucesso' : die('Falha ao alterar dados');
    
    $conn->close();
    header('Location: botoes.php');
?>
