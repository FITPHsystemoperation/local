<?php

namespace App\Http\Controllers;

use App\Mytools\Month;
use App\Mytools\Week;
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

        // dd($month);

        return view('calendar.index', compact('month'));
    }
}
