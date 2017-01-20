<?php

include('../config/config.php');

if (!$mysqli = getConectionDb()) {
    echo "{success: false, message: '$errorConexion'}";
} else {
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody, true);

    $setDocument = $setName = $setSurname = $setDateOfBirth = $setAddress = $setEmail = $setCell = "";

    if (isset($json["documentPerson"])) {
        $setDocument = "cedula = '" . $mysqli->real_escape_string($json["documentPerson"]) . "',";
    }
    if (isset($json["namePerson"])) {
        $setName = "nombres = '" . $mysqli->real_escape_string(utf8_decode($json["namePerson"])) . "',";
    }
    if (isset($json["surnamePerson"])) {
        $setSurname = "apellidos = '" . $mysqli->real_escape_string(utf8_decode($json["surnamePerson"])) . "',";
    }
    if (isset($json["dateOfBirthPerson"])) {
        $setDateOfBirth = "fecha_nacimiento = '" . $mysqli->real_escape_string($json["dateOfBirthPerson"]) . "',";
    }
    if (isset($json["addressPerson"])) {
        $setAddress = "direccion = '" . $mysqli->real_escape_string(utf8_decode($json["addressPerson"])) . "',";
    }
    if (isset($json["emailPerson"])) {
        $setEmail = "correo = '" . $mysqli->real_escape_string($json["emailPerson"]) . "',";
    }
    if (isset($json["phonePerson"])) {
        $setCell = "telefono = '" . $mysqli->real_escape_string($json["phonePerson"]) . "',";
    }

    $groupUpdate = $setDocument . $setName . $setSurname . $setDateOfBirth . $setAddress . $setEmail . $setCell;
    $setUpdate = substr($groupUpdate, 0, -1);

    $updateSql = "UPDATE persona "
            . "SET $setUpdate "
            . "WHERE id_persona = ?";

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