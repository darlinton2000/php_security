<?php

$gerar_hash = password_hash("123456", PASSWORD_BCRYPT); // PASSWORD_BCRYPT é recomendado para usar para senhas

$hash = '$2y$10$cbXXMXFEEB1I8Y0VDK21CulJ9e3fKrZsbAGxbmRwzMcpn9mOTb9y2';

$senha_form = '123456';

if (password_verify($senha_form, $hash)){
    echo 'Acertou!';
} else {
    echo 'Errou!';
}