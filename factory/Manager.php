<?php

abstract class Manager {
    abstract function getAptEncoder():AptEncoder;
    abstract function getBlogEncoder():BlogEncoder;
    abstract function getText():string ;
}