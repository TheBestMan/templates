<?php

abstract class Lesson {
    private $duration;
    private $costStrategy;

    public function show():void {
        echo "Стоимость занятия: " . $this->cost() . "\n";
    }

    public function __construct($duration, CosStrategy $cosStrategy) {
        $this->duration = $duration;
        $this->costStrategy = $cosStrategy;
    }

    private function cost():int {
        return $this->costStrategy->cost($this);
    }

    public function getDuration():int {
        return $this->duration;
    }

    public function getCostStrategy():CosStrategy {
        return $this->costStrategy;
    }

}