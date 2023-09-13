<?php
session_start();

if (!isset($_SESSION['usuario_autenticado']) || $_SESSION['usuario_autenticado'] !== true) {
    header("Location: inicio.html");
    exit();
}
?>