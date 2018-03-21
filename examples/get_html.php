<?php

use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setExtension('svg');

    $image = $avatar->getHtml();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}
