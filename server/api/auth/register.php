<?php
require "../config/database.php";
require "../helpers/response.php";

$data = json_decode(file_get_contents("php://input"), true);

$first = trim($data['first_name'] ?? '');
$last  = trim($data['last_name'] ?? '');
$email = trim($data['email'] ?? '');
$pass  = $data['password'] ?? '';
$ref   = $data['referral_code'] ?? null;

if (!$first || !$last || !$email || !$pass) {
    jsonResponse(false, "All fields are required");
}

$hash = password_hash($pass, PASSWORD_BCRYPT);

$stmt = $pdo->prepare(
  "INSERT INTO users (first_name, last_name, email, password, referral_code)
   VALUES (?, ?, ?, ?, ?)"
);

try {
    $stmt->execute([$first, $last, $email, $hash, $ref]);
    jsonResponse(true, "Registration successful");
} catch (PDOException $e) {
    jsonResponse(false, "Email already exists");
}
