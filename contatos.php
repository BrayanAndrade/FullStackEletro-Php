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

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos FSE</title>
    <link rel="stylesheet" href="Css/EstiloFullStack.css">
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


    <h1 align="center">Contatos</h1>
    
    
    <hr>


    <!--Tabela de Contatos-->
    <table border=0 width="100%" cellppading="20">
        <tr>
            <td width="33%" align="center">
                <img src="./po/email logo.png" width="6%">
                <p></p>Fullstack@gmail.com</p>
            </td>
            <td width="33%" align="center">
                <img src="./po/tel logo (2).png" width="5%">
                <p>(21)9999-9999</p>
            </td>
            <td width="33%" align="center">
                <img src="./po/87390.png" width="5%">
                <p>@FullStack-Eletro</p>
            </td>
        </tr>
        </tr>
    </table>

    <!--Tabela de Contatos-->



    <form method="post" action="">
        <h4>Nome: </h4>
        <input type="text" name="nome" style="width:400px;"><br>
        <h4>Mensagem: </h4>
        <input type="text" name="msg" style="width:500px"><br>
        <input type="submit" name="submit" value="Enviar"><br>
    </form>


    <br> <br> <br> 


    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                echo "Data:", $rows['data'], "<br>";
                echo "Nome:", $rows['nome'], "<br>";
                echo "Mensagem:", $rows['msg'], "<br>";
                echo "<hr>";
            }
        } else {
        echo "Nenhum comentario cadastrado!";
    }
    ?>





    
    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de Pagamento</b></p>
        <center><img src="./po/pagamento.png" width="17%"></center>
        <p>&copy; Recode Pro</p>
    </footer>

    

</body>

</html>