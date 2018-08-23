<?php

function getRequestHeaders(): array
{
    $headers = [];

    foreach ($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }

        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }

    return $headers;
}

function getRequestPost(): array
{
    return $_POST;
}

function getRequestQuery(): array
{
    return $_GET;
}

function getRequestRemote(): array
{
    return [
        'port' => $_SERVER['REMOTE_PORT'],
        'addr' => $_SERVER['REMOTE_ADDR'],
    ];
}
