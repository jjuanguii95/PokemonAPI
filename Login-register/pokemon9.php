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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/estiloboton.css">
</head>
<body>
    <a target="_blank" class="fcc-btn" href="bienvenida.php">View all Pokemons</a>
    <div id='elem'></div>
    <script src="scriptpoke9.js"></script>
    
</body>
</html>