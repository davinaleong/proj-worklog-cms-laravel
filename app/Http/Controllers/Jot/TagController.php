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

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        request()->validate([
            'table' => [
                'required',
                'string',
                Rule::in(['companies', 'projects', 'years', 'dayTypes'])
            ],
            'count' => 'required|integer|gte:0',
            '*.*.title' => 'string',
            '*.*.code' => 'string',
            '*.*.period_started_on' => 'string|regex:/^[0-3]\d-\d{2}-[0-2]\d{3}$/',
            '*.*.period_ended_on' => 'string|regex:/^[0-3]\d-\d{2}-[0-2]\d{3}$/',
            '*.*.icon_fa' => 'string|regex:/^fas fa-fw fa-[a-zA-Z]+$/',
            '*.*.color_hex' => 'string|regex:/^#[0-9a-fA-F]{6}$/',
            '*.*.remove' => [
                Rule::in(['', 'remove'])
            ],
        ]);

        // TODO: Switch case on 'table' field
        // TODO: Truncate 'table'
        // TODO: Omit 'remove' records
        // TODO: Insert un-'remove' records
    }
}
