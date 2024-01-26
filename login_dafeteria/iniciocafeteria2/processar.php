<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nextstage_bookcoffee";
    $nome_atendente = $_POST['nome_atendente'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die ('erro ao tentar se conectar');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
        header('Location: index.php');
    }

    $sql = "SELECT * FROM atendentes WHERE login = '$login' and senha = '$senha' ";

    $result = mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_atende'] = $row['cod_atendente'];
        header('Location: Site2/mesas.php');
    }else {
        $msg = "Dados incorretos!!!";
    }

    mysqli_close($conn);

?>
