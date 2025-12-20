<?php
require "../config/database.php";
require "../helpers/response.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(false, "Invalid request method");
}

/* ======================
   AUTH CHECK (EXAMPLE)
====================== */
// Expect token header (you should already have this system)
$headers = getallheaders();
if (!isset($headers['Authorization'])) {
    jsonResponse(false, "Unauthorized");
}

// TODO: validate token and get real user id
$user_id = intval($_POST['user_id']);
if ($user_id <= 0) {
    jsonResponse(false, "Invalid user");
}

/* ======================
   FILE VALIDATION SETUP
====================== */
$allowedExt = ['jpg', 'jpeg', 'png', 'pdf'];
$allowedMime = ['image/jpeg', 'image/png', 'application/pdf'];
$maxSize = 2 * 1024 * 1024; // 2MB

function upload($file, $path, $allowedExt, $allowedMime, $maxSize)
{
    if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    if ($file['size'] > $maxSize) {
        return false;
    }

    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExt, true)) {
        return false;
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime  = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);

    if (!in_array($mime, $allowedMime, true)) {
        return false;
    }

    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }

    $name = uniqid('kyc_', true) . '.' . $ext;

    if (!move_uploaded_file($file['tmp_name'], "$path/$name")) {
        return false;
    }

    return $name;
}

/* ======================
   PROCESS FILES
====================== */
$doc = upload(
    $_FILES['document'] ?? null,
    "../uploads/documents",
    $allowedExt,
    $allowedMime,
    $maxSize
);

$selfie = upload(
    $_FILES['selfie'] ?? null,
    "../uploads/selfies",
    $allowedExt,
    $allowedMime,
    $maxSize
);

if (!$doc || !$selfie) {
    jsonResponse(false, "Invalid or unsupported files");
}

/* ======================
   DATABASE UPDATE
====================== */
$stmt = $connection->prepare(
    "UPDATE users 
     SET kyc_level = 3, kyc_status = 'pending'
     WHERE id = ?"
);
$stmt->bind_param("i", $user_id);
$stmt->execute();

if ($stmt->affected_rows <= 0) {
    jsonResponse(false, "KYC submission failed");
}

jsonResponse(true, "KYC Level 3 submitted successfully");
