<?php
session_start();

if(!isset($_SESSION["logado"])) {
    header("location:../login/index.php?msg=erro");
    exit;
}