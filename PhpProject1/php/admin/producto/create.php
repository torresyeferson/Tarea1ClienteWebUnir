<?php

include('../config/config.php');
if (!$mysqli = getConectionDb()) {
    echo "{success: false, message: '$errorConexion'}";
} else {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody, true);
    $eliminado = 0;    
    $insertSql = "INSERT INTO producto (producto,categoria,precio_venta,precio_compra, eliminado) "
            . "VALUES(?, ?, ?, ?, ?)";

    $stmt = $mysqli->prepare($insertSql);
    if ($stmt) {
        $stmt->bind_param("sissi", $mysqli->real_escape_string(utf8_decode($json["producto"])),$json["categoria"],$json["precioVenta"],$json["precioCompra"] , $eliminado);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "{success: true, message: 'Persona registrada correctamente'}";
        } else {
                echo "{success: false, message: 'No se puede registrar la Persona ($stmt->errno)'}";
        }
        $stmt->close();
    } else {
        echo "{success: false, message: 'Problemas en la construcción de la consulta '}";
    }
    $mysqli->close();
}