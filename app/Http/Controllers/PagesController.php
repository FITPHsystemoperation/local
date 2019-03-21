<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function profile()
    {
    	return view('pages.profile')->with('staff', Auth::user()->staff);
    }

    public function home()
    {
        return view('pages.home');
    }
}
