<?php

namespace App\Http\Controllers;

use App\CodeModel;
use App\Company;
use App\DayType;
use App\EntryItem;
use App\Log;
use App\LogEntry;
use App\Project;
use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
            'years' => Year::all()->sortBy('title_year'),
            'companies' => Company::all()->sortBy('title_company'),
            'dayTypes' => DayType::all()->sortBy('title_type'),
            'projects' => Project::all()->sortBy('title_project')
        ]);
    }

    public function store()
    {
        $codeModel = new CodeModel();

        request()->validate([
            'title_log' => [
                'required',
                'string'
            ],
            'code_company' => [
                'required',
                'string',
                Rule::in($codeModel->companies())
            ],
            'year_id' => [
                'required',
                'numeric',
                Rule::in($codeModel->years())
            ],
            'published' => [
                'string',
                Rule::in(['', 'published'])
            ],
            'entries.*.title_entry' => [
                'required',
                'string'
            ],
            'entries.*.code_type' => [
                'required',
                'string',
                Rule::in($codeModel->dayTypes())
            ],
            'entries.*.count_item' => [
                'required',
                'numeric'
            ],
            'entries.*.items.*.title_item' => [
                'string'
            ],
            'entries.*.items.*.code_project' => [
                'string',
                Rule::in($codeModel->projects())
            ],
            'entries.*.items.*.remove' => [
                Rule::in(['', 'remove'])
            ]
        ]);

        // TODO: Save data
        $entries = [];
        $items = [];

        $log = Log::create([
            'user_id' => Auth::id(),
            'title_log' => request('title_log'),
            'code_company' => request('code_company'),
            'year_id' => request('year_id'),
            'published' => request('published') ? 1 : 0
        ]);
        $message = 'New Log created.';

        foreach (request('entries') as $entryKey=>$entry) {
            $createdEntry = LogEntry::create([
                'user_id' => Auth::id(),
                'log_id' => $log->id,
                'title_entry' => request('entries.'.$entryKey.'.title_entry'),
                'code_type' => request('entries.'.$entryKey.'.code_type'),
                'date' => '2019-01-01'
            ]);

            foreach (request('entries.'.$entryKey.'.items') as $itemKey=>$item) {
                if (! request('entries.'.$entryKey.'items'.$itemKey.'.remove')) {
                    $items[] = EntryItem::create([
                        'user_id' => Auth::id(),
                        'log_entry_id' => $createdEntry->id,
                        'title_item' =>
                            request('entries.'.$entryKey.'items'.$itemKey.'.title_item'),
                        'code_project' =>
                            request('entries.'.$entryKey.'items'.$itemKey.'.code_project')
                    ]);
                }
            }

            $entries[] = $createdEntry;
        }

        if (count($entries) >= 5) {
            // TODO: Redirect to show log page
            $message .=
                '<br>Entries inserted: '.count($entries).
                '<br>Items inserted: '.count($items);
            return redirect()
                ->action('WorkLogController@show', ['id' => $log->id])
                ->with(['message' => $message]);
        }

        // TODO: Redirect back with errors
        return back()->withInput()->withErrors('Failed to create Work Log');
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
