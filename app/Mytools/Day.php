<?php

namespace App\Mytools;

class Day
{
    public $value;
    public $fullDate;
    public $day;

    function __construct($day)
    {
        $this->value = $day;
        $this->fullDate = date('F d, Y', $day);
        $this->day = date('j', $day);
    }
}