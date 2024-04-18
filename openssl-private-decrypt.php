<?php

$privateKey = file_get_contents('private_key.pem');

$privateKeyResource = openssl_pkey_get_private($privateKey);

if ($privateKeyResource === false) {
    echo "Failed to load private key.\n";
}

$data = "ubpM6UqeXFKeyE1JyzTRt8fsecYMDMvFO66b+F7rFbWDBqTeGqbC5zfewmLFMTsuIeX1EjgxHdQaHN279KmnMfOUJY4EFnPUwJTAq1A4Wt4/PjedUPLK8UHLFxRuU3U2o+0HJL/40oaxl+W11ZrjRickyv5EOEa6CFz8ObsHkfiJb2NpZXcKZAbklPVJT9nrpS9gx2bko1JZs5BTP6GkYT1nu1PSaVXN9hDPMFdKTbYmMe4CRPsQH5l1QppQesuzbcnD5QZR94r6uo9KzXvMBXyawZ+O05bpLupeMjIO1xTjlBM3dIJFWX3yAzIExOo5VMgvi8l1PESNaBLrMqxx/g==";

if (openssl_private_decrypt(base64_decode($data), $encryptedData, $privateKeyResource)) {
    echo "Decrypted: " . $encryptedData . "\n";
} else {
    echo "Decryption failed.\n";
}