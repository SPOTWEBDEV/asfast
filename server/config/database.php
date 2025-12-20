<?php

session_start();

define("HOST", "localhost");

$domain = "http://asfast.com.thestratgroupltd.com/";
define("USER", "thestrat_asfast");
define("PASSWORD", "thestrat_asfast");
define("DATABASE", "thestrat_asfast");


$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (!$connection) {
    http_response_code(500);
    echo json_encode(["status" => false, "message" => "Database connection error"]);
    exit;
}


$sitename  = 'Asfast';
$siteemail = 'support@asfast.com';
