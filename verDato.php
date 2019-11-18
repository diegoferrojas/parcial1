<?php
    $dato = json_decode(file_get_contents("datos.json"))->dato;

?>

<h1>
    <?= $dato ?>

</h1>