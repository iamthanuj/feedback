<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'thanuja');
define('DB_PASS', 'Password123');
define('DB_NAME', 'php_dev');



//Create Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

?>
