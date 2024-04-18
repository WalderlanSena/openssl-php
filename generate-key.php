<?php
$config = array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

$res = openssl_pkey_new($config);

openssl_pkey_export($res, $privateKey);

$keyDetails = openssl_pkey_get_details($res);

$publicKey = $keyDetails['key'];

file_put_contents('private_key.pem', $privateKey);
file_put_contents('public_key.pem', $publicKey);

