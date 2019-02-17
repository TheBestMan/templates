<?php

class ManagerOld {
    const MEETING = 1;
    const EVENT = 2;
    private $mode;

    public function __construct($mode) {
        $this->mode = $mode;
    }

    public function getAptEncode() {
        switch ($this->mode) {
            case 1: return new MeetingAptEncoder(); break;
            case 2: return new EventAptEncoder(); break;
            default: throw new Exception('Метод не придуман');
        }
    }
}