<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
|--------------------------------------------------------------------------
| ENVIRONMENT DETECTION
|--------------------------------------------------------------------------
| Works for:
| - Browser
| - Thunder Client / Postman
| - Mobile apps (Expo / Android / iOS)
*/

$isLocal = in_array($_SERVER['SERVER_NAME'], [
    'localhost',
    '127.0.0.1'
]);

/*
|--------------------------------------------------------------------------
| DATABASE CONFIG
|--------------------------------------------------------------------------
*/

if ($isLocal) {
    // 🔹 LOCAL (XAMPP)
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'asfast');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('BASE_URL', 'http://localhost/asfast/');
} else {
    // 🔹 LIVE SERVER
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'thestrat_asfast');
    define('DB_USER', 'thestrat_asfast');
    define('DB_PASS', 'thestrat_asfast');
    define('BASE_URL', 'https://asfast.com.thestratgroupltd.com/');
}

/*
|--------------------------------------------------------------------------
| PDO CONNECTION
|--------------------------------------------------------------------------
*/

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "status" => false,
        "message" => "Database connection failed"
    ]);
    exit;
}



$sitename  = 'Asfast';
$siteemail = 'support@asfast.com';
