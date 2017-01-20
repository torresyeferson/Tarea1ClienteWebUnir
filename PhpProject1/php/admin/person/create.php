<?php

include('../config/config.php');
if (!$mysqli = getConectionDb()) {
    echo "{success: false, message: '$errorConexion'}";
} else {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody, true);
    $eliminado = 0;
    $idUser = $_SESSION["IDUSUARIOKBUS" . $site_city];
    $insertSql = "INSERT INTO persona (nombres, apellidos,documento_identificacion,fecha_nacimiento, direccion, correo, telefono, eliminado) "
            . "VALUES(?, ?, ?, ?, ?, ?, ?, ?, )";

    $stmt = $mysqli->prepare($insertSql);
    if ($stmt) {
        $stmt->bind_param("sssssssi", $mysqli->real_escape_string(utf8_decode($json["nombrePersona"])), $mysqli->real_escape_string(utf8_decode($json["apellidoPersona"])), $mysqli->real_escape_string(utf8_decode($json["documentoIdentificacion"])), $mysqli->real_escape_string($json["dateOfBirth"]), $mysqli->real_escape_string(utf8_decode($json["direccion"])), $mysqli->real_escape_string($json["email"]), $mysqli->real_escape_string($json["telefono"]), $eliminado);
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