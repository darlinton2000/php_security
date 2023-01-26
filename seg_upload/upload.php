<?php

// Verificar se houve o envio da foto
if (!empty($_FILES['foto']['tmp_name'])){

    /* 
    // Para verificar o arquivo $_FILES
    print_r($_FILES);
    exit; */

    if($_FILES['foto']['type'] == 'image/jpeg'){

        $nome_aleatorio = md5(rand(0, 999).time()). '.jpeg';
        
        // Move o arquivo para fotos/...
        move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/' . $nome_aleatorio);

        echo 'Foto carregada com sucesso!';
    }
}