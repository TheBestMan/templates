<?php

class ReqexpMarker extends Marker {

    function mark($responce) {
        return (preg_match($this->test, $responce));
    }
}