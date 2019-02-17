<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$army = new Army();
$army->addUnit(new Archer());
$army->addUnit(new Laser());

$sub_army = new Army();
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

$sub_sub_army = new Army();
$sub_sub_army->addUnit(new Laser());

$sub_army->addUnit($sub_sub_army);
$army->addUnit($sub_army);

echo "Убойная сила - " . $army->bombardStrength();
echo "\n";


