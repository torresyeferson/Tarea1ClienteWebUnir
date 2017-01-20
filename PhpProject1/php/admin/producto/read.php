<?php

include('../config/config.php');
if (!$mysqli = getConectionDb()) {
    echo "{success:false, message: 'No se ha podido conectar a la Base de Datos.<br>Compruebe su conexión a Internet.',state: false}";
} else {
   
    $consultaSql = "SELECT * FROM producto
            WHERE eliminado=0 ";
   
    $result = $mysqli->query($consultaSql);
    $mysqli->close();

    $objJson = "{data: [";

    while ($myrow = $result->fetch_assoc()) {
        $objJson .= "{"
                . "idProducto:" . $myrow["id_producto"] . ","                                
                . "producto:'" . utf8_encode($myrow["producto"]) . "',"
                . "categoria:" . $myrow["categoria"] . ","                
                . "precioventa:'" . $myrow["precio_venta"] . "',"                                
                . "preciocompra:'" .$myrow["precio_compra"]. "},";
    }
    $objJson .= "]}";
    echo $objJson;
}