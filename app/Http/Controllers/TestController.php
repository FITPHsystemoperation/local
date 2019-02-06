<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    	dump(auth()->user()->isUser2());

    	return 'worked';
    }
}
