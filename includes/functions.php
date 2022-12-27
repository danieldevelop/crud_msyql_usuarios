<?php

require_once './includes/database.php';

function existeRegistros() { 
    global $conn;

    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($conn, $sql);
    return (mysqli_num_rows($result) > 0) ? true : false;
}


function listarUsuarios() {
    global $conn;
    $campos = array();

    $sql = 'SELECT u.idcod, u.rut, CONCAT_WS(" ", u.nom, u.apll) AS nombre, u.nacionalidad, ';
    $sql.= 'u.sexo, u.fchNacimiento, u.username ';
    $sql.= 'FROM usuario u ';
    $sql.= 'ORDER BY u.idcod desc; ';
    $result = mysqli_query($conn, $sql);

    while($fila = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        $campos[] = $fila;
    }

    return $campos;
}


function buscarUsuario($id) {
    global $conn;

    $sql ="SELECT u.idcod, u.rut, u.apll, u.nom, u.nacionalidad, u.sexo, u.fchNacimiento, ";
    $sql.="u.username, u.userpass "; 
    $sql.="FROM usuario u ";
    $sql.="WHERE idcod = {$id} ";

    $result = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($result, MYSQLI_BOTH);

    return $fila;
}