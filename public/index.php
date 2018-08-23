<?php

include_once 'helpers.php';

header('Content-Type: application/json');

echo json_encode([
    'method' => $_SERVER['REQUEST_METHOD'],
    'protocol' => $_SERVER['REQUEST_SCHEME'],
    'headers' => getRequestHeaders(),
    'post' => getRequestPost(),
    'query' => getRequestQuery(),
    'remote' => getRequestRemote(),
]);
