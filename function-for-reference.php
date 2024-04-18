<?php


function reference(&$data) {
    $data = 'change';
}

reference($information);

echo $information;

