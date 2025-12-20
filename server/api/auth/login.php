<?php
require "../config/database.php";
require "../helpers/response.php";
require "../helpers/jwt.php";

$data = json_decode(file_get_contents("php://input"), true);

$email = trim($data['email'] ?? '');
$pass  = $data['password'] ?? '';

if (!$email || !$pass) {
    jsonResponse(false, "Email and password required");
}

$stmt = $pdo->prepare("SELECT id, password, kyc_level FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !password_verify($pass, $user['password'])) {
    jsonResponse(false, "Invalid login credentials");
}

$secret = "CHANGE_THIS_TO_A_LONG_RANDOM_SECRET";

$token = createJWT([
    "uid" => $user['id'],
    "kyc" => $user['kyc_level']
], $secret);

jsonResponse(true, "Login successful", [
    "token" => $token,
    "user" => [
        "id" => $user['id'],
        "kyc_level" => $user['kyc_level'],
        "firstName"=> $user['kyc_level'],
        "LastName"=> $user['kyc_level'],
        "email"=> $user['email'],
    ]
]);
