<?php

//openssl genpkey -algorithm RSA -out private_key.pem -pkeyopt rsa_keygen_bits:2048
//openssl rsa -pubout -in private_key.pem -out public_key.pem

$privateKeyFile = file_get_contents('private_key.pem');

$privateKey = openssl_pkey_get_private($privateKeyFile);

$data = <<<OEF
    'email': 'asdasdasd@asdasdas.com',
    'senha': '12345678'
OEF;

openssl_sign($data, $signature, $privateKey, OPENSSL_ALGO_SHA256);

$signature_base64 = base64_encode($signature);

echo "Assinatura: $signature_base64";