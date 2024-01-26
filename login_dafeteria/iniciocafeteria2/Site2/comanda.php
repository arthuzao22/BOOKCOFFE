<?php
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

$sql = "SELECT * FROM pedidos where mesas_cod_mesa = {$_GET['cod_mesa']}";
$result = mysqli_query($conn, $sql);

$conn->close();

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="01, 02, 03, 04, 05, 06">
    <meta name="description" content="">
    <title>Sobre</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Sobre.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.18.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam:300,400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <style>
    #cf {
        border-radius: 15px;
        background-color: #323736;
        align-items: center;
        padding: 30px;
        margin: 180px auto;
        color: white;
        margin-top: 140px;
        width: 60px;
    }

    #botaoc:hover {
        background-color: black;
    }

    #botaoc {
        background-color: #323736;
        /* Green */
        border: none;
        color: white;
        padding: 6px 22px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        /* margin: 4px 2px; */
        cursor: pointer;
        border-color: white;
        border-style: groove;
        border-width: 1px;
    }

    .container {
        width: 50%;
    }

    .menu {
        margin-top: 2rem;
    }

    .menu a {
        margin-right: 1.5rem;
        text-decoration: none;
        color: white;
    }
    </style>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "sameAs": [
            "https://facebook.com/name",
            "https://twitter.com/name",
            "https://www.instagram.com/name"
        ]
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sobre">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Sobre">
    <meta property="og:type" content="website">
</head>

<body data-home-page="Sobre.html" data-home-page-title="Sobre" class="u-body u-xl-mode" data-lang="pt"
    style="background-color: black;">
    <header class="u-custom-color-1 u-header" id="sec-6d6d" data-animation-name="" data-animation-duration="0"
        data-animation-delay="0" data-animation-direction="">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="menu">
                <a href="mesas.php">Início</a>
                <a href="listarctg.php">Categorias</a>
                <a href="listarp.php">Produtos</a>
            </div>
            <form action="#" method="get"
                class="u-border-1 u-border-grey-30 u-expanded-width-xs u-search u-search-right u-search-1">
                <button class="u-search-button" type="submit">
                    <span class="u-search-icon u-spacing-10 u-text-grey-40">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9dab"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="svg-9dab" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                            style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                            </path>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </span>
                </button>
                <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                <input type="hidden" name="formServices" value="30630d8c041d4aaec64c1e78251e5aa2">
            </form>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg- offset-">
                <center>
                    <h1 style="font-family: 'Nanum Myeongjo', serif; color: white;">Editar dados</h1>
                </center>
                <br>
                <table class='table table-dark table-striped'>
                    <tr>
                        <td>id</td>
                        <td>Mesa</td>
                        <td>Nome do cliente</td>
                        <td>Data do pedido</td>
                        <td>Hora do pedido</td>
                        <td>cod do atendente</td>
                        <td>valor do pedido</td>
                        <td>editar</td>
                    </tr>

                    <?php if ($result->num_rows > 0) {
                      while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['cod_pedido'] ?></td>
                        <td><?php echo $row['mesa_pedido'] ?></td>
                        <td><?php echo $row['cliente_pedido'] ?></td>
                        <td><?php echo $row['data_pedido'] ?></td>
                        <td><?php echo $row['hora_pedido'] ?></td>
                        <td><?php echo $row['atendente_pedido'] ?></td>
                        <td><?php echo $row['valor_total_pedido'] ?></td>
                        <td><a class="btn btn-primary" id="botaomes"
                                href="editarpd.php?cod_pedido=<?php echo $row['cod_pedido'] ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg></a></td>
                    </tr>

                    <?php } ?>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8c71" style="margin-top: 30vmax;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Repellendus impedit quos culpa perspiciatis enim doloremque ex laudantium, alias reiciendis, ab id
                sit pariatur voluptatum? Consectetur suscipit quaerat officia explicabo facilis.</p>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">

    </section>

</body>

</html>