<?php

namespace App\Http\Controllers;

use App\Mytools\Month;
use App\Mytools\Week;
use App\Mytools\Day;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($month, $year)
    {
        $month = new Month($month, $year);

        return view('calendar.index', compact('month'));
    }

    public function dailyTask($day)
    {
        $parts = explode('-', $day);

        $day = new Day( mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]), false );

        return view('calendar.daily' , compact('day'));
    }
}
