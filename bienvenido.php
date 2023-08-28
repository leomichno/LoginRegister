<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicie sesion");       
            </script>
        ';
        header("location:index.php");
        session_destroy();
        die();
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="./php/cerrar_session.php">Cerrar Session</a>
</body>
</html>