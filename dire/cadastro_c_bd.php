<?php


$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$link_imagem = $_POST["link_imagem"];
$link_card = $_POST["link_card"];


include "./conecta.php";

$sql = "INSERT INTO usuarios (titulo, descricao, link_imagem, link_card)
VALUES ('". $titulo ."','". $descricao ."','". $link_imagem ."','". $link_card ."');";

if (mysqli_query($conexao, $sql)) {
    $id_usuario_criado = mysqli_insert_id($conexao);

    session_start();
    $_SESSION["IdUsuario"] = $id_usuario_criado;

    header('Location:./home.php', true, 303);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

?>