<?php

namespace App\Http\Controllers;

use App\CodeModel;
use App\Company;
use App\Year;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $codeModel = new CodeModel();

        $now = new \DateTime('now', new \DateTimeZone(config('app.timezone')));

        return view('output.index', [
            'codeModel' => $codeModel,
            'year' => Year::where('title_year', '=', $now->format('Y'))->firstOrFail(),
            'company' => Company::where('code_company', '=', 'TPA')->firstOrFail()
        ]);
    }
}
