<?php

    $conexion= mysqli_connect("localhost","root","","login_register_db");

    if($conexion){
        echo 'conectado correctamente';
    }else{
        echo 'no se ha podido conectar a la base de datos';
    }


?>