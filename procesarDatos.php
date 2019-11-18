<?php

    $dato = $_GET["dato"];
    $objeto = json_decode(file_get_contents("datos.json"));
    $objeto->dato = $dato;
    file_put_contents("datos.json", json_encode($objeto));
    

?>