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

if (isset($_POST['nome']) && isset($_POST['msg'])) {
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
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>



    <!--Inicio do Menu-->
    <?php
    include('menu.html');
    ?>

    <!--Titulo-->

    <div class="container-fluid bg-light">
        <h1 align="center">Contatos</h1>
        <hr>
    </div>

    <!--Formulario-->

    <div class="container bg-info mt-5" style="width:490px; height:210px;">
        <form method="post" action="">
            <h4>Nome: </h4>
            <input type="text" name="nome" style="width:450px;"><br>
            <h4>Mensagem: </h4>
            <input type="text" name="msg" style="width:450px"><br><br>
            <input class="btn btn-light" type="submit" name="submit" value="Enviar" style="width:250px;"><br>
        </form>
    </div>

    <br> <br> <br>



    <!--Tabela de Contato-->

    <div class="container-fluid bg-light ">
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
    </div>


    <?php
    $sql = "select * from comentarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo "Data:", $rows['data'], "<br>";
            echo "Nome:", $rows['nome'], "<br>";
            echo "Mensagem:", $rows['msg'], "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum comentario cadastrado!";
    }
    ?>


<div class="container-fluid mt-5">
            <h2 class="display-5 text-center text-info">Formas de pagamento</h2>
            <center>
            <img src="./po/pagamento.png" width="350px">
            <p>&copy; Recode Pro</p>
            </center>
        </div>

</body>

</html>