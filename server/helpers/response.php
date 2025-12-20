<?php
function jsonResponse($status, $message, $data = null) {
    header('Content-Type: application/json; charset=utf-8');
    http_response_code($status ? 200 : 400);

    echo json_encode([
        "status" => $status,
        "message" => $message,
        "data" => $data
    ]);

    exit;
}
