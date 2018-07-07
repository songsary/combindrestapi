<?php
session_start();

// อนุญาติให้เรียกไฟล์จากแหล่งภายนอกได้
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
}

$host = "localhost";
$user_db = "root";
$pass_db = "1234";
$dbname = "combinddapp";

// Connect mysql database
$connect = mysqli_connect($host, $user_db, $pass_db, $dbname);
mysqli_set_charset($connect, 'utf8'); // เข้ารหัส utf8

if($connect)
{
    //echo "Connect db success";
}

