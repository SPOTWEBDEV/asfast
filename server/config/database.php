<?php
error_reporting(E_ALL);
ini_set('display_errors', ($_SERVER['HTTP_HOST'] === 'localhost') ? 1 : 0);

session_start();

define("HOST", "localhost");

$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

if ($isLocalhost) {
    $domain = "http://localhost/asfast/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "asfast");
} else {
    $domain = "https://boostyard.com.yahhh44.com/";

    define("USER", "yahhhcom_boostyard");
    define("PASSWORD", "yahhhcom_boostyard");
    define("DATABASE", "yahhhcom_boostyard");
}

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (!$connection) {
    http_response_code(500);
    echo json_encode(["status" => false, "message" => "Database connection error"]);
    exit;
}

mysqli_set_charset($connection, "utf8mb4");

$sitename  = 'Asfast';
$siteemail = 'support@asfast.com';
