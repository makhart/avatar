<?php

use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setNewFileName('trahkam');

    $image = $avatar->rename();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}
