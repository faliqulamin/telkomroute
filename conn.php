﻿<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$db = "route";
 $mysqli = new mysqli($servidor, $user, $senha, $db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>