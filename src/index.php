<?php

/* Very basic autoloader */
function autoloader($class) {
    $map = array(
        'Cooks\Context' => './Cooks/Context.php',
        'Cooks\Cook' => './Cooks/Cook.php',
        'Cooks\Preparation' => './Cooks/Preparation.php',
        'Cooks\Preparations\BeerAndHardRock' => './Cooks/Preparations/BeerAndHardRock.php',
        'Cooks\Preparations\PutApronOn' => './Cooks/Preparations/PutApronOn.php',
        'Cooks\Preparations\SetClassicalMusicOn' => './Cooks/Preparations/SetClassicalMusicOn.php',
        'Cooks\Preparations\TakeKnifeCollection' => './Cooks/Preparations/TakeKnifeCollection.php',
        'Cooks\Preparations\WashHands' => './Cooks/Preparations/WashHands.php',
    );

    if (!array_key_exists($class, $map)) {
        throw new Exception(sprintf('Unable to find file for class: %s', $class));
    }

    if (!is_readable($map[$class])) {
        throw new Exception(sprintf('Unable to load file: %s', $map[$class]));
    }

    include $map[$class];
}
spl_autoload_register('autoloader');

/* "Start" the application */
$context = new Cooks\Context();
echo $context->prepareAllCooks();
