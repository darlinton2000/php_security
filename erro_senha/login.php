<?php
/* Evitando ataques de força bruta */

session_start();

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($_SESSION['login_tentativas']) && $_SESSION['login_tentativas'] >= 3) {
        echo "Seu acesso está bloqueado!";
    } else {
        if ($email == ' ' && $senha == '123') {
            echo "Acesso OK!";
        } else {
            if (!isset($_SESSION['login_tentativas'])) {
                $_SESSION['login_tentativas'] = 0;
            }

            $_SESSION['login_tentativas']++;

            echo "Senha errada! Tentativas: " . $_SESSION['login_tentativas'];
        }

        echo "<hr/>";
    }
}
?>

<form method="POST">
    Email: <br />
    <input type="email" name="email" /><br /><br />

    Senha: <br />
    <input type="password" name="senha" /><br /><br />

    <input type="submit" value="Enviar" />
</form>