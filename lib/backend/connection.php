<?php
require_once "../config/config.php";

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, 3308);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>