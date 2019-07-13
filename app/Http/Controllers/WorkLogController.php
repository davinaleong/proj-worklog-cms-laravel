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

        $log = Log::create([
            'user_id' => Auth::id(),
            'title_log' => request('title_log'),
            'code_company' => request('code_company'),
            'year_id' => request('year_id'),
            'published' => request()->has('published') ? 1 : 0
        ]);

        $message = 'New Log created.';
        $entries = request('entries');
        $createdEntries = [];
        $createdItems = [];

        foreach ($entries as $entryKey=>$entry) {
            $createdEntry = LogEntry::create([
                'user_id' => Auth::id(),
                'log_id' => $log->id,
                'title_entry' => $entry['title_entry'],
                'code_type' => $entry['code_type'],
                // TODO: Implement date field
                'date' => '2019-01-01'
            ]);

            foreach ($entry['items'] as $itemKey=>$item) {
                if (! array_key_exists('remove', $item)) {
                    $createdItems[] = EntryItem::create([
                        'user_id' => Auth::id(),
                        'log_entry_id' => $createdEntry->id,
                        'title_item' => $item['title_item'],
                        'code_project' => $item['code_project']
                    ]);
                }
            }

            $createdEntries[] = $createdEntry;
        }

        if (count($createdEntries) >= 5) {
            $message .=
                ' '.count($createdEntries).' entries created.' .
                ' '.count($createdItems).' items created.';
            return redirect()
                ->action('WorkLogController@show', ['id' => $log->id])
                ->with(['message' => $message]);
        }

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
        return view('worklog.edit', [
            'log' => Log::find($id),
            'years' => Year::all()->sortBy('title_year'),
            'companies' => Company::all()->sortBy('title_company'),
            'dayTypes' => DayType::all()->sortBy('title_type'),
            'projects' => Project::all()->sortBy('title_project')
        ]);
    }

    public function update($id)
    {
        $codeModel = new CodeModel;

        // TODO: Validate
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
            'entries.*.id' => [
                'required',
                'numeric'
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
            'entries.*.items.*.id' => [
                'required'
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

        // TODO: Process request data
        // Save log
        $log = Log::find($id);
        $log->title_log = request('title_log');
        $log->code_company = request('code_company');
        $log->year_id = request('year_id');
        $log->published = request()->has('published') ? 1 : 0;
        $log->save();

        // Save entries
        // Check for 'new' id in entry items
        // Save items
        // Create for 'new' id items
        $message = 'Log updated.';
        $entries = request('entries');
        $updatedEntries = [];
        $updatedItems = [];
        $createdItems = [];

        foreach ($entries as $entryKey=>$entry) {
            $entryToUpdate = LogEntry::find($entry['id']);
            $entryToUpdate->title_entry = $entry['title_entry'];
            $entryToUpdate->code_type = $entry['code_type'];
            // TODO: Implement date field
            $entryToUpdate->save();

            // TODO: Process items

            $updatedEntries[] = $entryToUpdate;
        }

        // TODO: Redirects
        if (count($updatedEntries) >= 5) {
            $message .=
                ' '.count($updatedEntries).' entries updated.' .
                ' '.count($updatedItems).' items updated.' .
                ' '.count($createdItems).' new items created.';
            return redirect()
                ->action('WorkLogController@show', ['id' => $log->id])
                ->with(['message' => $message]);
        }

        return back()->withInput()->withErrors('Failed to update Work Log.');
    }
}
