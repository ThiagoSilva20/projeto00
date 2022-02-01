<?php
    session_start();
    unset($_SESSION["IdUsuario"]);

    header('Location:./index.php', true, 303);
?>