<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Theme;

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

    public function theme(Theme $theme)
    {
        return view('pages.theme', compact('theme'))
            ->with('staff', Auth::user()->staff)
            ->with('themes', Theme::where('enabled', 1)->get());
    }
}
