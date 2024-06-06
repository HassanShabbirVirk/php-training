<?php

$root = getcwd() . DIRECTORY_SEPARATOR;

define('File_Path', $root . 'transections' . DIRECTORY_SEPARATOR);
define('View_Path', $root . 'view' . DIRECTORY_SEPARATOR);
require 'app.php';

$files = getTransectionFiles(File_Path);

$transections = [];
foreach ($files as $file) {

    $transections = array_merge($transections, getTranssections($file));
}

$total = 0;
$expense = 0;
foreach ($transections as $transection) {
    if ($transection[2] >= 0) {
        $total += $transection[2];
    } else {
        $expense += $transection[2];
    }
}

require View_Path . 'transecctions.php';
