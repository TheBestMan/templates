<?php

abstract class cell {
    protected $address;
    protected $value;

    public function __construct($address, $value = null) {
        $this->address = $address;
        $this->value = $value;
    }

    public function setValue($value = null):void {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}

class worksheet {
    protected $collection = [];

    public function getCell($address, $value = null) {
        if (isset($this->collection[$address])) {
            return $this->collection[$address];
        }
        $cell = new class($address, $value) extends cell {
        };
        $this->collection[$address] = $cell;
        return $cell;
    }
}

$worksheet = new worksheet();
$cellA1 = $worksheet->getCell('A1', 10);


trait AnonymousSerialize {
    public function serialize():string {
        $properties = [];
        foreach (get_object_vars($this) as $name => $value) {
            $properties[$name] = $value;
        }
        return serialize($properties);
    }

    public function unserialize($data):void {
        $data = unserialize($data, [AnonymousSerialize::class]);
        foreach ($data as $name => $value) {
            $this->{$name} = $value;
        }
    }
}

$cellA2 = new class('A2', 20) extends cell { use AnonymousSerialize; };

var_dump($cellA2->serialize());

$tr = $cellA2->serialize();
$cellA2->unserialize($tr);
var_dump($cellA2);
