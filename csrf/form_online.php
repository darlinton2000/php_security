<?php
/* Evitando spoofing de formulário ao implementar o CSRF */

session_start();

if (!isset($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = md5(time() . rand(0,999));
}

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    if ($_POST['csrf_token'] == $_SESSION['csrf_token']){
        if ($email == 'teste@hotmail.com' && $senha == '123'){
            echo "Acesso OK!";
        } else {
            echo "Senha errada!";
        }
    } else {
        echo "Este form foi enviado de outro site!";
    }    
}

?>

<form method="POST">
    Email: <br />
    <input type="email" name="email" /><br /><br />

    Senha: <br />
    <input type="password" name="password" /><br /><br />

    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />

    <input type="submit" value="Enviar" />
</form>