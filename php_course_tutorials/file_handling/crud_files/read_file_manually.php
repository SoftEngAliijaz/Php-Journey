<?php

$filePath  = __DIR__ . '/test_file.txt';

if (file_exists($filePath)) {
    $file = fopen($filePath, 'r') or die('Something went wrong');

    echo fread($file, filesize($filePath));

    fclose($file);
} else {
    die('File does not exist');
}