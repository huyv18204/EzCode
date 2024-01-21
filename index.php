<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'src/common/connect-db.php';
require_once 'src/common/helper.php';
require_file('./src/client/controllers/');
require_file('./src/client/models/');

$action =$_GET['action'] ?? null;

match ($action){
    "detail" => detail(),
    "singerpage" => singerpage(),
    "learning" => learning(),
    default => home(),

};
require_once 'src/common/disconnect-db.php';
