<?php

use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

return [
    "database" => [
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "badir",
        "charset" => "utf8mb4",
        "username"=>"root",
        "password"=>"aliabd739252434"
    ],
    "phpmailer"=>[
            'mail_host'     => $_ENV['MAIL_HOST'],
            'mail_port'     => $_ENV['MAIL_PORT'],
            'mail_username' => $_ENV['MAIL_USERNAME'],
            'mail_password' => $_ENV['MAIL_PASSWORD'],
            'mail_from'     => $_ENV['MAIL_FROM'],
            'mail_from_name'=> $_ENV['MAIL_FROM_NAME']
        ]

    

];
