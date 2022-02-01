<?php

include "./conecta.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT id, nome, email, senha FROM usuarios WHERE email='". $email ."' AND senha='". $senha ."';"; 

$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    session_start();
    $_SESSION["IdUsuario"] = $usuario["id"];

    header('Location:./home.php', true, 303);
}else{
    echo "<h1 style='color:red'> Usuário ". $email  ." não encontrado </h1>";
    echo "<a href=\"./index.php\"> Voltar </a>";
}

?>
