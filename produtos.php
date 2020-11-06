<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from produtos";
$result = $conn->query($sql)
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error());
//   }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos FSE</title>
    <link rel="icon" href="./po/d logo.png">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="Js/index.js"></script>
</head>

<body>

    <!--Inicio do Menu-->

    <?php
    include('menu.html');
    ?>

    <!--Fim do menu-->


    <h2 class="display-4 text-center mt-2 bg-info" style="background-color: purple;">Produtos</h2>


    <!--Inicio das Categorias-->


    <section class="container-fluid" style=" margin-top: 10px">

        <h2 class="display-6  mb-5  titulocategoria">Categorias</h2>

        <div class="categorias">
            <ul>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_todos()"> Todos (15)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('geladeira')"> Geladeira (2)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('fogao')">Fogão (2)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('microondas')">Micro-ondas (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('lava-roupa')">LavaRoupas (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('lava-loucas')">Lava-louças (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('console')">Consoles(2)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('ferro-de-passar')">Ferro de Passar (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('som')">HomeTheater(1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('fritadeira')">AirFryer (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('liquidificador')">Liquidificador (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('sanduicheira')">Sanduicheira (1)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="exibir_categoria('mixer')">Mixer (1)</li>
            </ul>
        </div>



        <!--Inicio da Tabela de Produtos-->

        <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {

        ?>

                <div class="box_produto" style="display:inline-block" id="<?php echo $rows["categoria"]; ?>">
                    <img src="<?php echo $rows["imagem"]; ?>" width="70px" onclick="destaque(this)" onmouseout="defocus1(this)">
                    <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                    <hr id="barrinha">
                    <p class="oldpreco"> R$<?php echo $rows["preco"]; ?></p>
                    <p class="preco"> R$<?php echo $rows["preco_venda"]; ?></p>
                </div>


        <?php
            }
        } else {
            echo "Nenhum produto cadastrado!";
        }
        ?>

        <!--Footer-->


        <div class="container-fluid mt-5">
            <h2 class="display-5 text-center text-info">Formas de pagamento</h2>
            <center>
            <img src="./po/pagamento.png" width="350px">
            <p>&copy; Recode Pro</p>
            </center>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>