<?php

namespace App\Http\Controllers;

use App\Mytools\Month;
use App\Mytools\Week;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index($month, $year)
    {
        $month = new Month($month, $year);

        // dd($month);

        return view('calendar.index', compact('month'));
    }

    protected function showDate($date)
    {
        return date('F j, Y', $date);
    }
}
