<?php

include('../config/config.php');
if (!$mysqli = getConectionDb()) {
    echo "{success:false, message: 'No se ha podido conectar a la Base de Datos.<br>Compruebe su conexión a Internet.',state: false}";
} else {
   
    $consultaSql = "SELECT * FROM persona
            WHERE eliminado=1
            ORDER apellidos";
   
    $result = $mysqli->query($consultaSql);
    $mysqli->close();

    $objJson = "{data: [";

    while ($myrow = $result->fetch_assoc()) {
        $objJson .= "{"
                . "idPerson:" . $myrow["id_persona"] . ","                
                . "documentPerson:'" . $myrow["documento_identificacion"] . "',"
                . "namePerson:'" . utf8_encode($myrow["nombres"]) . "',"
                . "surnamePerson:'" . utf8_encode($myrow["apellidos"]) . "',"                
                . "dateOfBirthPerson:'" . utf8_encode($myrow["fecha_nacimiento"]) . "',"                                
                . "addressPerson:'" . utf8_encode($myrow["direccion"]) . "',"
                . "emailPerson:'" . utf8_encode($myrow["correo"]) . "',"
                . "phonePerson:'" . $myrow["telefono"] . "},";
    }
    $objJson .= "]}";
    echo $objJson;
}