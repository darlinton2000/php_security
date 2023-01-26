<?php

/* 'OR '1'='1 */
$email = addslashes($_POST['email']); //Se estiver com o bindValue não precisa se preocupar com o que vem do POST
$senha = addslashes($_POST['senha']); //Se estiver com o bindValue não precisa se preocupar com o que vem do POST

$pdo = new PDO("mysql:dbname=seg_sqlinjection;host=localhost", "root", "root");

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
/*Ex: $sql = "SELECT * FROM usuarios WHERE email = ''OR '1'='1' AND senha = ''OR '1'='1'"; */
/*Ex: $sql = "SELECT * FROM usuarios WHERE email = ''OR '1'='1' AND senha = ''OR '1'='1'; DELETE * FROM usuarios WHERE '1'='1'"; */

$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
$sql = $pdo->prepare($sql);
$sql->bindValue(':email', $email);
$sql->bindValue(':senha', $senha);
$sql->execute();

if ($sql->rowCount() > 0){
    echo "Usuário logado!";
} else {
    echo "Errou usuário/senha";
}