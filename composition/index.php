<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

/* @var $lessons Lesson[] */
$lessons[] = new Lecture(3, new FixedCostStrategy());
$lessons[] = new Seminar(6, new TimeCostStrategy());

foreach ($lessons as $lesson) {
    $lesson->show();
}
