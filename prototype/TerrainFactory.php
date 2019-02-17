<?php

class TerrainFactory {
    private $sea;
    private $forest;
    private $plaints;


    /**
     * TerrainFactory constructor.
     * @param Sea $sea
     * @param Forest $forest
     * @param Plaints $plaints
     */
    public function __construct(Sea $sea, Forest $forest, Plaints $plaints) {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plaints = $plaints;
    }

    /**
     * @return Sea
     */
    public function getSea(): Sea {
        return clone $this->sea;
    }

    /**
     * @return Forest
     */
    public function getForest(): Forest {
        return clone $this->forest;
    }

    /**
     * @return Plaints
     */
    public function getPlaints(): Plaints {
        return clone $this->plaints;
    }


}