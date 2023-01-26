<?php

require 'header.php';

$p = 'home';

if (!empty($_GET['p'])){

    $pagina = $_GET['p'];

    if (strpos($pagina, '.') === false){
        if (file_exists('paginas/' . $pagina . '.php')){
            $p = $pagina;
        }
    }
} 

require 'paginas/' . $p . '.php';

require 'footer.php';

// No php.ini a extensão 'allow_url_fopen' e 'allow_url_include' tem que estar OFF