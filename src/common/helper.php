<?php

if (!function_exists('require_file')) {
    function require_file($pathFolder)
    {
        $file = array_diff(scandir($pathFolder), ['.', '..']);
        foreach ($file as $fileName) {
            require_once $pathFolder . $fileName;
        }
    }
}
