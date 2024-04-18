<?php
// Dados a serem criptografados
$data = "Dados secretos";

// Chave de criptografia (deve ser segura e geralmente é gerada usando uma função de hash ou método similar)
$key = '12345678901234567890123456789012'; // Chave de 32 bytes para AES-256-CBC

// Especificar o método de criptografia
$cipher = "AES-256-CBC";

// Criar um vetor de inicialização seguro
$ivLength = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivLength);

// Criptografar os dados
$encrypted = openssl_encrypt($data, $cipher, $key, $options=0, $iv);
echo "Dados Criptografados: " . $encrypted . "\n";

// Descriptografar os dados
$decrypted = openssl_decrypt($encrypted, $cipher, $key, $options=0, $iv);
echo "Dados Descriptografados: " . $decrypted . "\n";