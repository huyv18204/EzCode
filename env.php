<?php
define('DB_HOST', "localhost");
define('DB_PORT', "80");
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ezcode');
define('PATH_ROOT'            , __DIR__);
const BASE_URL = "http://localhost/EzCode";

function route($url) {
    return BASE_URL.$url;
}