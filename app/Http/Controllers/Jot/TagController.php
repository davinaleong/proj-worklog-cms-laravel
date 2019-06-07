<?php

namespace App\Http\Controllers\Jot;

use App\Http\Controllers\Jot\JotController;
use App\Company;
use App\DayType;
use App\Project;
use App\Year;
use Illuminate\Http\Request;

class TagController extends JotController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('tag.index', [
            'years' => Year::all(),
            'companies' => Company::all(),
            'projects' => Project::all(),
            'dayTypes' => DayType::all()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('tag.edit', [
            'years' => Year::all(),
            'companies' => Company::all(),
            'projects' => Project::all(),
            'dayTypes' => DayType::all()
        ]);
    }
}
