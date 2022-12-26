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
    global $fila; // necesario para utilizarlo en file index

    $sql = 'SELECT u.idcod, u.rut, CONCAT_WS(" ", u.nom, u.apll) AS nombre, u.nacionalidad, ';
    $sql.= 'u.sexo, u.fchNacimiento, u.username ';
    $sql.= 'FROM usuario u ';
    $sql.= 'ORDER BY u.idcod desc; ';
    $result = mysqli_query($conn, $sql);

    while($fila = mysqli_fetch_array($result, MYSQLI_BOTH)) {

        if ($fila['nacionalidad'] == "-1"):
            $nacionalidad = '';
        else:
            $nacionalidad = ucfirst($fila['nacionalidad']);
        endif;

        if ($fila['sexo'] == "M"):
            $sexo = 'Masculino';
        elseif ($fila['sexo'] == "F"):
            $sexo ='Femenino';
        elseif ($fila["sexo"] == "P" || $fila["sexo"] == "PND"):
            $sexo = 'Prefiero no decirlo';
        elseif (empty($fila["sexo"])):
            $sexo = '';
        endif;

        // $delURL = "del-user.php?idcod=" . $fila['idcod'];
        $table ="<tr>";
            $table.="<td>{$fila['idcod']}</td>";
            $table.="<td>{$fila['rut']}</td>";
            $table.="<td>{$fila['nombre']}</td>";
            $table.="<td>{$nacionalidad}</td>";
            $table.="<td>{$sexo}</td>";
            $table.="<td>{$fila['fchNacimiento']}</td>";
            $table.="<td>{$fila['username']}</td>";
        //     $table.="<td colspan='2' class='text-center d-flex aling-items-center gap-2'>";
        //         $table.="<a href='upd-user.php?idcod={$fila['idcod']}' class='btn btn-sm btn-success' title='editar'>";
        //             $table.="<img src='./img/pencil-square.svg' alt='icon bootstrap' class='img-fluid'>";
        //         $table.="</a>";
        //         $table.="<button onclick='confirmDelete($delURL)' class='btn btn-sm btn-danger' title='eliminar'>";
        //             $table.="<img src='./img/trash.svg' alt='icon bootstrap' class='img-fluid'>";
        //         $table.="</button>";
        //     $table.="</td>";
        // $table.="</tr>";

        return $table;
    }
}

