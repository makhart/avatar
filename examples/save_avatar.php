<?php

use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setName('Makhart');
    $image = $avatar->setShape('squares');
    $image = $avatar->setTheme('heatwave');
    $image = $avatar->setNumberColors('4');
    $image = $avatar->setSize('50');
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setExtension('svg');

    $image = $avatar->save();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}
