<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$factory = new TerrainFactory(new EarthSea(-1), new MarsForest(), new EarthPlaints());
print_r($factory);