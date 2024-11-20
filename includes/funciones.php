<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo(string $actual, string $proximo): bool {
    if ($actual !== $proximo) {
        return true;
    }
    return false;
}

function iniciarSession() {
    if(!isset($_SESSION)){
        session_start();
    }  
}

// Función que revisa que el usuario esté autenticado
function isAuth() : void {
    if (!isset($_SESSION['login'])) {
        header('location: /');
    }
}

function validarFecha($fecha) {
    $txtFecha = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
    if (!preg_match($txtFecha,$fecha)) {
        $fecha = date('Y-m-d');
    }
    return $fecha;
    
    $fechas = explode('-', $fecha);
    if (!checkdate($fechas[1], $fechas[2], $fechas[0])) {
        $fecha = date('Y-m-d');
    }
    return $fecha;
}

function isAdmin() : void {
    if (!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}