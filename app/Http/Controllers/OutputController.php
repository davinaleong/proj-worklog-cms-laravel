<?php

namespace App\Http\Controllers;

use App\CodeModel;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $codeModel = new CodeModel();
        return view('output.index', [
            'codeModel' => $codeModel
        ]);
    }
}
