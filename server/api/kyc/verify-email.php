<?php
require "../../config/database.php";
require "../../helpers/response.php";

$token = $_GET['token'] ?? '';

$q = mysqli_query($connection,
 "SELECT id FROM users WHERE email_token='$token'"
);

if (mysqli_num_rows($q) == 0) {
    jsonResponse(false, "Invalid token");
}

$user = mysqli_fetch_assoc($q);

mysqli_query($connection,
 "UPDATE users SET email_verified=1, kyc_level=1, email_token=NULL WHERE id={$user['id']}"
);

jsonResponse(true, "Email verified successfully");
