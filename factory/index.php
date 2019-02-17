<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

//$manager = new ManagerOld(2);
//$aptEncoder = $manager->getAptEncode();
//echo $aptEncoder->encode();

$manager = new EventManager();
echo $manager->getAptEncoder()->encode();
echo $manager->getBlogEncoder()->encode();
echo $manager->getText();