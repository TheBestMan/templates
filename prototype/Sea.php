<?php

class Sea {
    private $navigability = 0;

    /**
     * Sea constructor.
     * @param int $navigability
     */
    public function __construct(int $navigability) {
        $this->navigability = $navigability;
    }


}