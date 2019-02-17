<?php

class MarkLogicMarker extends Marker {
    private $engine;

    /**
     * MarkLogicMarker constructor.
     */
    public function __construct($test) {
        parent::__construct($test);
//        $this->engine = new MarkerParser($test);
    }

    function mark($responce) {
//        return $this->engine->evalute($responce);
        // Возвратим фиктивное значение
        return true;
    }
}