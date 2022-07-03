<?php

if(isset($_POST["usuario"]) && isset($_POST["senha"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Aqui valida o usuario e senha nas 
    if($usuario == "admin" && $senha == "123") {
        echo "Bem vindo!";
    } else{
        header("location:../View/login/index.php?msg=erro_login");
    }

} else{
    header("location:../View/login/index.php?msg=erro_dados");
}