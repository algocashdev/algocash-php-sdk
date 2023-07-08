<?php
require_once '../vendor/autoload.php';

$payload = @file_get_contents('php://input');
$body = json_decode($payload);
$sig_header = $_SERVER['Signature'];

$accessToken = "";

$signature = hash_hmac('sha256', $payload, $accessToken);

if ($signature == $sig_header) {
    http_response_code(200);
} else {
    http_response_code(401);
}
?>