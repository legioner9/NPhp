<?php
// echo "$_SERVER['DOCUMENT_ROOT']" . "<br>";
// echo "$_SERVER['SCRIPT_FILENAME']";
// var_dump($_SERVER);
// print_r($_SERVER);

function e_serv($key)
{
    if (isset($_SERVER[$key])){
    echo  "$key: ", $_SERVER[$key],"\n";
    }
    else {
       echo "$key: undefined in _SERVER\n";
    }
}

$arr_name = array(
    'SERVER_SOFTWARE',
    'PHP_SELF',
    'GATEWAY_INTERFACE',
    'SERVER_ADDR',
    'SERVER_NAME',
    'argc',
    'argv',
    'SERVER_PROTOCOL',
    'REQUEST_METHOD',
    'REQUEST_TIME',
    'QUERY_STRING',
    'DOCUMENT_ROOT',
    'HTTPS',
    'REMOTE_ADDR',
    'REMOTE_USER',
    'REMOTE_PORT',
    'REDIRECT_REMOTE_USER',
    'SCRIPT_FILENAME',
    'SERVER_ADMIN',
    'REMOTE_HOST',
);

foreach ($arr_name as $name) {
    e_serv($name);
};
