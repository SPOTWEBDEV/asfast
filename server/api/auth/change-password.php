<?php
require "../config/database.php";
require "../helpers/response.php";

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['user_id'];
$old = $data['old_password'];
$new = $data['new_password'];

$stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if (!password_verify($old, $user['password'])) {
    jsonResponse(false, "Old password incorrect");
}

$hash = password_hash($new, PASSWORD_BCRYPT);

$pdo->prepare("UPDATE users SET password=? WHERE id=?")
    ->execute([$hash, $user_id]);

jsonResponse(true, "Password updated");
