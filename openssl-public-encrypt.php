<?php

$publicKey = file_get_contents('public_key.pem');

$publicKeyResource = openssl_pkey_get_public($publicKey);

if ($publicKeyResource === false) {
    echo "Failed to load public key.\n";
}

$data = "Confidential data";

if (openssl_public_encrypt($data, $encryptedData, $publicKeyResource)) {
    echo "Encrypted: " . base64_encode($encryptedData) . "\n";
} else {
    echo "Encryption failed.\n";
}