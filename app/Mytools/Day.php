<?php

namespace App\Mytools;

use App\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Day
{
    public $value;
    public $fullDate;
    public $day;
    public $active;
    public $sunday;
    public $tasks = [];

    function __construct($day, $status)
    {
        $this->value = $day;
        $this->active = $status;
        $this->fullDate = date('F d, Y', $day);
        $this->day = date('j', $day);
        $this->sunday = (date('N', $day) == 7);
        $this->date = date('Y-m-d', $day);

        $this->storeTasks();
    }

    protected function storeTasks()
    {
        $this->tasks = DB::table('tasks')->where('date', $this->date)->get()->all();
    }
}