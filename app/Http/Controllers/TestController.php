<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $this->authorize('isDeveloper', auth()->user());

    	dd(auth()->user() ? 'ok' : 'none');
    }
}
