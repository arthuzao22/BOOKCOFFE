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
?>

<!doctype html>
<html lang="pt-br">


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

    td {
        color: white;
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
    label{
        color: white;
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
                <h2 style="color: white; text-align: center;">Alterar produto</h2>
                <form action="editar_produto.php" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="cod_produto" value="<?php echo $_GET['cod_produto']?>">

                        <label for="cod_barras" class="form-label">Código de barras</label>
                        <input type="text" style="background-color: #323736;color: white" class="form-control" id="cod_barras" name="cod_barras">

                        <label for="descricao_produto" class="form-label">Descrição do produto</label>
                        <input type="text" style="background-color: #323736;color: white" class="form-control" id="descricao_produto" name="descricao_produto">

                        <label for="v_unit_produto" class="form-label">Valor do produto</label>
                        <input type="text" style="background-color: #323736;color: white" class="form-control" id="v_unit_produto" name="v_unit_produto">
                        <br>
                        <select name="CATEGORIAS_cod_categoria"style="background-color: #323736;color: white">
                            <option value="" >Selecione</option>
                            <?php 
                            $sql = "SELECT * FROM categorias";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($result)){?>
                            <option value="<?php echo $row['cod_categoria'] ?>"><?php echo $row['descricao_categoria']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Editar" >
                </form>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script>
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
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