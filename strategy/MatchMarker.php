<?php

class MatchMarker extends Marker {

    function mark($responce) {
        return ($this->test == $responce);
    }
}