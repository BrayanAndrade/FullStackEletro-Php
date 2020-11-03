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
    <script src="Js/index.js"></script>
</head>

<body>




    <!--Inicio do Menu-->


    <nav class="menu">
        <a href="index.php"> <img width="80px" src="./po/pngwing.com.png" width="100px">
        <ul class="opcoes-menu">
            <li> <a href="produtos.php">Produtos</a> </li>
            <li> <a href="lojas.php">Lojas</a> </li>
            <li> <a href="contatos.php">Contatos</a> </li>
        </ul>
    </nav>
    <br>
    <br>


    <!--Fim do menu-->


    <header>
        <h1 id="produtostitulo">Produtos</h1>
    </header>





    <!--Inicio das Categorias-->

    <div id="fundocat"></div>

    <div class="titulocategoria"><p>Categorias</p></div>



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


    <!--Fim das Categorias-->



    <!--Inicio da Tabela de Produtos-->

    <?php
    $sql = "select * from produtos";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
            
    ?>       

    <div class="box_produto" style="display:inline-block" id="<?php echo $rows ["categoria"];?>">
            <img src="<?php echo $rows ["imagem"];?>" width="70px" onclick="destaque(this)" onmouseout="defocus1(this)">
            <p class="descricao"><?php echo $rows ["descricao"];?></p>
            <hr id="barrinha">
            <p class="oldpreco"> R$<?php echo $rows ["preco"];?></p>
            <p class="preco"> R$<?php echo $rows ["preco_venda"];?></p>
        </div>



    <?php
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }
    ?>



    <!--Fim da Tabela de Produtos-->





    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de Pagamento</b></p>
        <img src="./po/pagamento.png" width="17%">
        <p>&copy; Recode Pro</p>
    </footer>



</body>

</html>