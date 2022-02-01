<?php
session_start();
unset($_SESSION["IdUsuario"]);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culturis - Tudo sobre os ponstos turisticos</title>
    <link rel="stylesheet" href="stylelogin.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</head>


<body>
    <div class="box-parent-login center">
        <div class="well box-login">
            <h1  class="ls-login-logo">Login</h1>
            <fieldset  style="padding: 0; border: 1px;">
                <form class="center" role="form" id="form" method="POST" action="./login.php">
                    <!--nome-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="email" name="email" class="validate" require>
                            <label for="email">E-mail</label>
                        </div>
                    </div>

                    <!--senha-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" id="senha" name="senha" class="validate" require>
                            <label for="senha">Sua senha</label>
                        </div>
                    </div>

                    <p>
                        Não é cadrastado?
                        <a href="cadastrar.php">Cadastre-se agora</a>
                    </p>

                    <!--botão de enviar-->
                    <div>
                        <a href="index.php" id="home1">
                            <input type="submit" value="ACESSAR" id="sub" />
                        </a>
                    </div>

                </form>
            </fieldset>
        </div>
    </div>
</body>


</html>