<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$markers = [new ReqexpMarker("/П.ть/u"),
    new MatchMarker("Пять"),
    new MarkLogicMarker('$input equals "Пять"'),
];
foreach ($markers as $marker) {
    print get_class($marker) . " \n ";
    $question = new TextQuestion("Сколько лучей у Кремлевской звезды? ", $marker);
    foreach (["Пять", "Четыре"] as $response) {
        print " \t Text: $response : ";
        if ($question->mark($response))
            print "Правильно ! \n ";
        else {
            print "Неверно ! \n";
        }

    }
}