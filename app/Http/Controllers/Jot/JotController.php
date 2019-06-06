<?php

namespace App\Http\Controllers\Jot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class JotController
 * This is the main controller for all dashboard routes.
 *
 * @package App\Http\Controller\Jot
 */
class JotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
