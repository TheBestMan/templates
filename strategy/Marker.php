<?php

abstract class Marker {
    protected $test;

    /**
     * Marker constructor.
     * @param $test
     */
    public function __construct($test) {
        $this->test = $test;
    }

    abstract function mark($responce);

}