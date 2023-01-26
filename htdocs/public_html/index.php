<?php
    /* Retirar a pasta de dentro de public_html */
    
    require "../app/config.php";
    require "../app/classes/Carro.php";

    $carro =  new Carro();
    $carro->andar();
?>