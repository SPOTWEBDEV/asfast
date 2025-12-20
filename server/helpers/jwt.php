<?php

function base64UrlEncode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function createJWT(array $payload, string $secret): string {
    $header = base64UrlEncode(json_encode([
        "typ" => "JWT",
        "alg" => "HS256"
    ]));

    $payload = base64UrlEncode(json_encode($payload));

    $signature = hash_hmac(
        "sha256",
        "$header.$payload",
        $secret,
        true
    );

    return "$header.$payload." . base64UrlEncode($signature);
}
