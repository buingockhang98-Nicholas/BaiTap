<?php

class User{
    public $name;
    public $class;
    public $date;

    function __construct($name, $class, $date){
        $this->name = $name;
        $this->class = $class;
        $this->date = $date;
    }
    
    
}