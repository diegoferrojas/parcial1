<?php

$dato = $_GET["form"];
echo json_encode($_POST);
file_put_contents("datos.json", json_encode($objeto));



?>