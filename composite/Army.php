<?php

class Army extends CompositeUnit {

    public function bombardStrength() {
        $total = 0;
        foreach ($this->getUnits() as $unit) {
            $total += $unit->bombardStrength();
        }

        return $total;
    }

}