<?php
function getConectionDb() {
    /* DATOS DE MI SERVIDOR */

    $db_name = "mydb";
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    @$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    return ($mysqli->connect_errno) ? false : $mysqli;
}