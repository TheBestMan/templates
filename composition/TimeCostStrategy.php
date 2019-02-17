<?php

class TimeCostStrategy extends CosStrategy {
    public function cost(Lesson $lesson):int    {
        return $lesson->getDuration() * 4;
    }
}