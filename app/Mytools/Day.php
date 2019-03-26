<?php

namespace App\Mytools;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $value;
    public $fullDate;
    public $day;
    public $active;
    public $sunday;

    function __construct($day, $status)
    {
        $this->value = $day;
        $this->active = $status;
        $this->fullDate = date('F d, Y', $day);
        $this->day = date('j', $day);
        $this->sunday = (date('N', $day) == 7);
    }
}