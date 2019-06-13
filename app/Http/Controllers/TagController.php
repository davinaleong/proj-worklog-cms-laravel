<?php

namespace App\Http\Controllers;

use App\Company;
use App\DayType;
use App\Http\Controllers\Controller;
use App\Project;
use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TagController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update()
    {
        request()->validate([
            'model' => [
                'required',
                'string',
                Rule::in(['Company', 'Project', 'Year', 'DayType'])
            ],
            'count' => 'required|integer|gte:0',
//            '*.*.title' => 'string',
//            '*.*.code' => 'string',
//            '*.*.period_started_on' => 'string|regex:/^[0-3]\d-\d{2}-[0-2]\d{3}$/',
//            '*.*.period_ended_on' => 'string|regex:/^[0-3]\d-\d{2}-[0-2]\d{3}$/',
//            '*.*.icon_fa' => 'string|regex:/^fas fa-fw fa-[a-zA-Z]+$/',
//            '*.*.color_hex' => 'string|regex:/^#[0-9a-fA-F]{6}$/',
            '*.*.remove' => [
                Rule::in(['', 'remove'])
            ],
        ]);

        $formProcessed = false;

        $model = request('model');
        $field_key = strtolower($model);
        $count = request('count');

        switch ($model) {
            case 'Company':
                Company::truncate();

                for ($i = 1; $i <= $count; ++$i) {
                    if (request($field_key.'.'.$i.'.remove') != 'remove') {
                        Company::create([
                            'title_company' => request($field_key.'.'.$i.'.title'),
                            'code_company' => request($field_key.'.'.$i.'.code'),
                            'period_started_on' => request($field_key.'.'.$i.'.period_started_on'),
                            'period_ended_on' => request($field_key.'.'.$i.'.period_ended_on')
                        ]);
                    }
                }

                $formProcessed = true;
                break;

            case 'Project':
                Project::truncate();

                for ($i = 1; $i <= $count; ++$i) {
                    if (request($field_key.'.'.$i.'.remove') != 'remove') {
                        Project::create([
                            'title_project' => request($field_key.'.'.$i.'.title'),
                            'code_project' => request($field_key.'.'.$i.'.code')
                        ]);
                    }
                }

                $formProcessed = true;
                break;

            case 'Year':
                Year::truncate();

                for ($i = 1; $i <= $count; ++$i) {
                    if (request($field_key.'.'.$i.'.remove') != 'remove') {
                        Year::create([
                            'title_year' => request($field_key.'.'.$i.'.title')
                        ]);
                    }
                }

                $formProcessed = true;
                break;


            case 'DayType':
                DayType::truncate();

                for ($i = 1; $i <= $count; ++$i) {
                    if (request($field_key.'.'.$i.'.remove') != 'remove') {
                        DayType::create([
                            'title_type' => request($field_key.'.'.$i.'.title'),
                            'code_type' => request($field_key.'.'.$i.'.code'),
                            'icon_fa' => request($field_key.'.'.$i.'.icon_fa'),
                            'color_hex' => request($field_key.'.'.$i.'.color_hex')
                        ]);
                    }
                }

                $formProcessed = true;
                break;
        }

        if ($formProcessed) {
            return redirect()
                ->action('TagController@index')
                ->with('message', 'Tags updated.');
        }

        return back()->withInput()->withErrors('Failed to update Tags');
    }
}
