<?php

namespace App\Mytools;

use App\Mytools\Week;

class Month
{
    public $index;
    public $name;
    public $year;
    public $firstDay;    
    public $lastDay;    
    protected $noOfWeeks;
    public $weeks = [];

    function __construct($month, $year)
    {
        $this->firstDay = mktime(0, 0, 0, $month, 1, $year);
        $this->lastDay = mktime(0, 0, 0, $month, date('t', $this->firstDay), $year);
        $this->index = date('m', $this->firstDay);

        $this->setName();
        $this->setNoOfWeeks();
        $this->generateWeeks($this->firstDay);
    }

    protected function setName()
    {
        $this->name = date('F', $this->firstDay);
        $this->year = date('Y', $this->firstDay);
    }

    protected function setNoOfweeks()
    {
        $firstWeek = date('W', $this->firstDay);
        $lastWeek = date('W', $this->lastDay);

        if ( $lastWeek == 1 )
        {
            $lastWeek = 53;
        }
        elseif ( $firstWeek > $lastWeek )
        {
            $firstWeek = 0; 
        }
        return $this->noOfWeeks = ($lastWeek - $firstWeek + 1); 
    }

    protected function generateWeeks($day)
    {
        for ($i=0; $i < $this->noOfWeeks; $i++) { 
            array_push(
                $this->weeks,
                    new Week(date('m', $this->firstDay) ,mktime(0, 0, 0, date('n', $day), date('j', $day) + (7 * $i), date('Y', $day)))
            );
        }
    }
}