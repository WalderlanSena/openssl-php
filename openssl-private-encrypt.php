<?php

$privateKey = file_get_contents('private_key.pem');

$privateKeyResource = openssl_pkey_get_private($privateKey);

if ($privateKeyResource === false) {
    echo "Failed to load public key.\n";
}

$data = "Confidential data";

if (openssl_private_encrypt($data, $encryptedData, $privateKeyResource)) {
    echo "Encrypted: " . base64_encode($encryptedData) . "\n";
} else {
    echo "Encryption failed.\n";
}