<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojas FSE</title>
    <link rel="stylesheet" href="Css/style.css">

</head>


<body>
    <!--Inicio do Menu-->


    <?php
    include('menu.html');
    ?>


    <!--Fim do menu-->


    <div class="container-fluid">

        <h3 class="display-4 text-center mt-5">Nossas Lojas</h3>

        <br>


        <div class="container">
            <img src="po/google-maps-marker.png" width="32%" alt="">
            <img src="po/google-maps-marker.png" width="32%" alt="">
            <img src="po/google-maps-marker.png" width="32%" alt="">
        </div>



        <div class="container">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>

                        <th scope="col">Rio de Janeiro</th>
                        <th scope="col">Sao Paulo</th>
                        <th scope="col">Santa Catarina</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Avenida Presidente Vargas, 5000</td>
                        <td>Avenida Paulista, 985</td>
                        <td>Rua Major &Aacute;vila, 370</td>
                    </tr>
                    <tr>

                        <td>10 &ordm; andar</td>
                        <td>3 &ordm; andar</td>
                        <td>Vila Marianat</td>
                    </tr>
                    <tr>

                        <td>(21)9999-9999</td>
                        <td>(21)9999-9999</td>
                        <td>(21)9999-9999</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <h2 class="display-5 text-center text-info">Formas de pagamento</h2>
        <center>
            <img src="./po/pagamento.png" width="350px">
            <p>&copy; Recode Pro</p>
        </center>
    </div>
    
    </body>
</html>