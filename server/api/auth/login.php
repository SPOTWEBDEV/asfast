<?php
require "../../config/database.php";
require "../../helpers/response.php";
require "../../helpers/jwt.php";

$data = json_decode(file_get_contents("php://input"), true);

$email = trim($data['email'] ?? '');
$password = $data['password'] ?? '';

if (!$email || !$password) {
    jsonResponse(false, "Email and password required");
}

$stmt = $pdo->prepare(
  "SELECT id, email, first_name, last_name, password, kyc_level
   FROM users WHERE email = ? LIMIT 1"
);
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !password_verify($password, $user['password'])) {
    jsonResponse(false, "Invalid login credentials");
}

$secret = 'JWT_SECRET';

$token = createJWT([
    "uid" => $user['id'],
    "kyc" => $user['kyc_level'],
    "exp" => time() + 3600 // 1 hour
], $secret);

jsonResponse(true, "Login successful", [
    "token" => $token,
    "user" => [
        "id" => $user['id'],
        "email" => $user['email'],
        "firstName" => $user['first_name'],
        "lastName" => $user['last_name'],
        "kyc_level" => $user['kyc_level'],
        "bal" => $user['bal'],
    ]
]);
