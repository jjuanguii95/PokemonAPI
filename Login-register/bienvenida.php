<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
        <script>
            alert("Por favor debes inicia sesión");
            window.location = "index.php";
            </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon API</title>
    <link rel="stylesheet" href="assets/css/estilos1.css">
</head>
<body>
    
    <div class=cerrar_sesion><a href="php/cerrar_sesion.php">Cerrar Sesión</a></div>     
    <main>
    
        <div class="portada"> <h1>Pokemon API</h1>
            <div class="caja_completa"></div>
                <div class="caja1"><a href="pokemon1.php">bulbasaur</a></div>
                <div class="caja1"><a href="pokemon2.php">ivysaur</a></div>
                <div class="caja1"><a href="pokemon3.php">venusaur</a></div>
                <div class="caja1"><a href="pokemon4.php">charmander</a></div>
                <div class="caja1"><a href="pokemon5.php">charmeleon</a></div>
                <div class="caja1"><a href="pokemon6.php">charizard</a></div>
                <div class="caja1"><a href="pokemon7.php">squirtle</a></div>
                <div class="caja1"><a href="pokemon8.php">wartortle</a></div>
                <div class="caja1"><a href="pokemon9.php">blastoise</a></div>
                <div class="caja1"><a href="pokemon10.php">caterpie</a></div>
                <div class="caja1"><a href="pokemon11.php">metapod</a></div>
                <div class="caja1"><a href="pokemon12.php">butterfree</a></div>
                <div class="caja1"><a href="pokemon13.php">weedle</a></div>
                <div class="caja1"><a href="pokemon14.php">kakuna</a></div>
                <div class="caja1"><a href="pokemon15.php">beedrill</a></div>
                <div class="caja1"><a href="pokemon16.php">pidgey</a></div>
                <div class="caja1"><a href="pokemon17.php">pidgeotto</a></div>
                <div class="caja1"><a href="pokemon18.php">piggeot</a></div>
                <div class="caja1"><a href="pokemon19.php">rattata</a></div>
                <div class="caja1"><a href="pokemon20.php">raticate</a></div>
            </div>              
        </div>    
    </main>
</body>
</html>