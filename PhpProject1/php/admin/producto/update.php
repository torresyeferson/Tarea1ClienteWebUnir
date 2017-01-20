<?php

include('../config/config.php');

if (!$mysqli = getConectionDb()) {
    echo "{success: false, message: '$errorConexion'}";
} else {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody, true);

    $setProducto = $setCategoria = $setPrecioV = $setPrecioC= "";

    if (isset($json["producto"])) {
        $setProducto = "producto = '" . $mysqli->real_escape_string($json["producto"]) . "',";
    }
    if (isset($json["categoria"])) {
        $setCategoria = "categoria = '" . $json["categoria"] . "',";
    }
    if (isset($json["precioventa"])) {
        $setPrecioV = "precio_venta = '" . $json["precioventa"] . "',";
    }
    if (isset($json["preciocompra"])) {
        $setPrecioC = "precio_compra = '" . $json["preciocompra"] . "',";
    }
    

    $groupUpdate = $setProducto. $setCategoria .$setPrecioV .$setPrecioC;
    $setUpdate = substr($groupUpdate, 0, -1);

    $updateSql = "UPDATE producto "
            . "SET $setUpdate "
            . "WHERE id_producto = ?";

    $stmt = $mysqli->prepare($updateSql);
    if ($stmt) {
        $stmt->bind_param("i", intval($json["id"]));
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "{success: true, message: 'Datos actualizados correctamente.'}";
        } else {
            echo "{success: false, message: 'No se pudo actualizar los registros de la Persona ($stmt->errno)'}";
        }
        $stmt->close();
    } else {
        echo "{success: false, message: 'Problemas en la construcción de la consulta.'}";
    }
    $mysqli->close();
}