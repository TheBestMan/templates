<?php

abstract class CosStrategy {
    abstract function cost(Lesson $lesson):int;
}