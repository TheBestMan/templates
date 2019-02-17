<?php

class FixedCostStrategy extends CosStrategy {
    public function cost(Lesson $lesson):int {
        return $lesson->getDuration() * 10;
    }
}