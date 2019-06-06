<?php

namespace App\Http\Controllers\Jot;

use App\Http\Controllers\Jot\JotController;
use Illuminate\Http\Request;

class HomeController extends JotController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
