<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

/* @var $tile Tile */
$tile = new Plains();
echo "Strong health - " . $tile->getWealthFactor() . "\n";

$tile = new PollutionDecorator(new DeamondDecorator(new Plains()));
echo "Strong health - " . $tile->getWealthFactor() . "\n";
