<?php
require "../../config/database.php";
require "../../helpers/response.php";

$data = json_decode(file_get_contents("php://input"), true);

$user_id = intval($data['user_id']);
$bvn = clean($data['bvn']);

if (strlen($bvn) != 11) {
    jsonResponse(false, "Invalid BVN");
}

/**
 * SEND BVN TO PROVIDER API HERE
 * If success → verified
 */

mysqli_query($connection,
 "INSERT INTO bvn_verifications (user_id, bvn, status)
  VALUES ($user_id, '$bvn', 'verified')"
);

mysqli_query($connection,
 "UPDATE users SET kyc_level=2 WHERE id=$user_id"
);

jsonResponse(true, "BVN verified successfully");
