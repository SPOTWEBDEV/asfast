<?php

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
    return base64_decode(strtr($data, '-_', '+/'));
}

function createJWT($payload, $secret, $expireSeconds = 86400) {
    $header = [
        "alg" => "HS256",
        "typ" => "JWT"
    ];

    $payload['iat'] = time();
    $payload['exp'] = time() + $expireSeconds;

    $base64Header = base64url_encode(json_encode($header));
    $base64Payload = base64url_encode(json_encode($payload));

    $signature = hash_hmac(
        'sha256',
        "$base64Header.$base64Payload",
        $secret,
        true
    );

    $base64Signature = base64url_encode($signature);

    return "$base64Header.$base64Payload.$base64Signature";
}

function verifyJWT($token, $secret) {
    $parts = explode('.', $token);
    if (count($parts) !== 3) return false;

    [$header, $payload, $signature] = $parts;

    $check = base64url_encode(
        hash_hmac('sha256', "$header.$payload", $secret, true)
    );

    if (!hash_equals($check, $signature)) return false;

    $data = json_decode(base64url_decode($payload), true);

    if ($data['exp'] < time()) return false;

    return $data;
}
