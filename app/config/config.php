<?php
$url = getenv('JAWSDB_MARIA_URL');
$dbParts = parse_url($url);
$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USERNAME');
$dbPwd = getenv('DB_PWD');
$dbName = getenv('DB_NAME');

$config1 = [
    'host' => $dbHost,
    'username' => $dbUser,
    'password' => $dbPwd,
    'database' => $dbName
];

// Pour se connecter au SGBD avant création de la BDD
$mySQLDSNNoDB = "mysql:host={$config['host']};";
// DSN à utiliser avec tous les droits
$mySQLDSN = "mysql:host={$config['host']};dbname={$config['database']};";
// DSN à utiliser pour l'accès admin (droits restreints)
 $mySQLDSNAdmin = "mysql:host={$config['host']};dbname={$config['database']};";