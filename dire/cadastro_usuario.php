<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];


include "./conecta.php";

$sql = "INSERT INTO usuarios (nome, email, senha, telefone)
VALUES ('". $nome ."','". $email ."','". $senha ."','". $telefone ."');";

if (mysqli_query($conexao, $sql)) {
    $id_card_criado = mysqli_insert_id($conexao);

    session_start();
    $_SESSION["IdUsuario"] = $id_card_criado;

    header('Location:./home.php', true, 303);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

?>