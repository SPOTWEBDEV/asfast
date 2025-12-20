<?php
require "../../config/database.php";
require "../../helpers/response.php";

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $pdo->prepare(
  "INSERT INTO bank_accounts (user_id, bank_name, account_number, account_name)
   VALUES (?, ?, ?, ?)"
);

$stmt->execute([
  $data['user_id'],
  $data['bank'],
  $data['account_number'],
  $data['account_name']
]);

jsonResponse(true, "Bank account added");
