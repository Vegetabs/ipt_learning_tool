<?php
function get_conn() {
    // define constants - cannot be changed by code
    define("dbserver", $_SERVER['SERVER_NAME']);
    define("dbusername", "murp31");
    define("dbpassword", "murp31");
    define("dbname", "murp31db");
    $conn = new mysqli(dbserver, dbusername, dbpassword, dbname);
    // Check connection
    if (!$conn) {
        die("Failed to connect to MySQL: " .mysqli_connect_error());
    }
    return $conn;
}
?>