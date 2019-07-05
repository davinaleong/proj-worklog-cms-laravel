<?php

namespace App\Http\Controllers;

use App\DayType;
use App\Log;
use App\Project;
use App\Year;
use Illuminate\Http\Request;

class WorkLogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('worklog.index', [
            'years' => Year::all()->sortByDesc('id')
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('worklog.create', [
            'dayTypes' => DayType::all()->sortBy('title_type'),
            'projects' => Project::all()->sortBy('title_project')
        ]);
    }

    /**
     * @param Log $log
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('worklog.show', [
            'log' => Log::find($id)
        ]);
    }

    /**
     * @param Log $log
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('worklog.edit');
    }
}
