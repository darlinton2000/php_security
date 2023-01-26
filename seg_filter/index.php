<?php

// filter_var
// filter_input = para GET ou POST

/*
// Este filtro faz a validação
FILTER_VALIDATE_INT
FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_URL
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_REGEX
FILTER_VALIDATE_IP

// Este filtro troca os caracteres
FILTER_SANITIZE_STRING
FILTER_SANITIZE_ENCODED
FILTER_SANITIZE_SPECIAL_CHARS
*/

$email = 'darlinton2000@gmail.com';
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'É um email';
} else {
    echo 'Não é um email';
}

echo "<br/><hr/>";

$numero = 10;
if (filter_var($numero, FILTER_VALIDATE_INT)){
    echo 'É um inteiro';
} else {
    echo 'Não é um inteiro';
}

echo "<br/><hr/>";

$html = "Esté é o <strong>meu nome</strong>";
$html = filter_var($html, FILTER_SANITIZE_SPECIAL_CHARS);
echo $html;

echo "<br/><hr/>";

$html = "Darlinton Luis <strong>Siqueira</strong>";
$html = strip_tags($html);
echo $html;

echo "<br/><hr/>";

$nome = filter_input(INPUT_GET, 'nome');
echo $nome;

echo "<br/><hr/>";

$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
echo $email;