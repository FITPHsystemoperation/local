<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
    	return view('pages.profile')->with('staff', Auth::user()->staff);
    }
}
