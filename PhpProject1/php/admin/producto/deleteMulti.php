<?php

include('../config/config.php');


if (!$mysqli = getConectionDb()) {
    echo "{success:false, message: 'Error: No se ha podido conectar a la Base de Datos.<br>Compruebe su conexión a Internet.'}";
} else {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody, true);
    $eliminado = 1;
    $setEliminado = "eliminado=" . $eliminado . "";
    $destroySql = "UPDATE personas SET $setEliminado WHERE id_persona IN ($listaEliminar)";
    $stmt = $mysqli->prepare($destroySql);
    if ($stmt) {
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "{success:true, message:'Datos Eliminados Correctamente.'}";
        } else {
            echo "{success:false, message: 'Problemas al Eliminar en la Tabla.'}";
        }
        $stmt->close();
    } else {
        echo "{success:false, message: 'Problemas en la Construcción de la Consulta.'}";
    }
    $mysqli->close();
}
?>