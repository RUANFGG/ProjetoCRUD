<?php
session_start();
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

     <?php
    if(isset($_SESSION['nao_autenticado'])):
     ?>
    <div class="notification is-danger">
    <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
     ?>

    <form action="login.php" method="post">

        <fieldset>

         <legend>LOGIN</legend>

        <div class="box">
            <input type="email" name="email" id="email" placeholder=" Digite seu e-mail" required>
        </div>
        <div class="box">
            <input type="password" name="senha" id="senha" placeholder=" Digite sua senha" required>
        </div>

        <div class="box">
            <input type="submit" value="Entrar">
        </div>
        <div class="box">
            <a href="./cadastro.html">Não tenho conta</a>
        </div>


    </fieldset>

    </form>
    
</body>
</html>
