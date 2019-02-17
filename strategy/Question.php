<?php

abstract class Question {
    protected $promt;
    protected $marker;

    /**
     * Question constructor.
     * @param $promt
     * @param $marker
     */
    public function __construct($promt, Marker $marker) {
        $this->promt = $promt;
        $this->marker = $marker;
    }

    public function mark($responce) {
        return  $this->marker->mark($responce);
    }


}