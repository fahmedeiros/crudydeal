<?php
session_start();

if(isset($_POST["usuario"]) && isset($_POST["senha"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Aqui valida o usuario e senha nas variáveis!
    if($usuario == "admin" && $senha == "123") {
        $_SESSION["logado"] = true;

        // redirecionamento do usuario a tela do sistema!
        header("location:../View/contact/contact_list.php");
        exit;
    } else{
        header("location:../View/login/index.php?msg=erro_login");
    }

} else{
    header("location:../View/login/index.php?msg=erro_dados");
}