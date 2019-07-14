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
        $createdEntries = [];
        $createdItems = [];

        foreach (request('entries') as $entryKey=>$entry) {
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
        $log = Log::find($id);
        if (! $log) {
            redirect()->action('WorkLogController@index')->with(['message' => 'Work Log not found.']);
        }

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
        $log = Log::find($id);
        if (! $log) {
            redirect()->action('WorkLogController@index')->with(['message' => 'Work Log not found.']);
        }

        return view('worklog.edit', [
            'log' => Log::find($id),
            'years' => Year::all()->sortBy('title_year'),
            'companies' => Company::all()->sortBy('title_company'),
            'dayTypes' => DayType::all()->sortBy('title_type'),
            'projects' => Project::all()->sortBy('title_project')
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        $codeModel = new CodeModel;

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

        $log = Log::find($id);
        $log->title_log = request('title_log');
        $log->code_company = request('code_company');
        $log->year_id = request('year_id');
        $log->published = request()->has('published') ? 1 : 0;
        $log->save();

        $message = 'Log updated.';
        $updatedEntries = [];
        $updatedItems = [];
        $createdItems = [];
        $removedItems = [];

        foreach (request('entries') as $entryKey=>$entry) {
            $entryToUpdate = LogEntry::find($entry['id']);
            $entryToUpdate->title_entry = $entry['title_entry'];
            $entryToUpdate->code_type = $entry['code_type'];
            $entryToUpdate->save();

            foreach ($entry['items'] as $itemKey=>$item) {
                if ($item['id'] == 'new') {
                    if (! array_key_exists('remove', $item)) {
                        $createdItems[] = EntryItem::create([
                            'user_id' => Auth::id(),
                            'log_entry_id' => $entryToUpdate->id,
                            'title_item' => $item['title_item'],
                            'code_project' => $item['code_project']
                        ]);
                    }
                } else {
                    if (array_key_exists('remove', $item)) {
                        EntryItem::destroy($item['id']);
                        $removedItems[] = $itemKey;
                    } else {
                        $itemToUpdate = EntryItem::find($item['id']);
                        $itemToUpdate->title_item = $item['title_item'];
                        $itemToUpdate->code_project = $item['code_project'];
                        $itemToUpdate->save();

                        $updatedItems[] = $itemToUpdate;
                    }
                }
            }

            $updatedEntries[] = $entryToUpdate;
        }

        if (count($updatedEntries) >= 5) {
            $message .=
                ' '.count($updatedEntries).' entries updated.' .
                ' '.count($updatedItems).' items updated.' .
                ' '.count($removedItems).' items removed.' .
                ' '.count($createdItems).' new items created.';
            return redirect()
                ->action('WorkLogController@show', ['id' => $log->id])
                ->with(['message' => $message]);
        }

        return back()->withInput()->withErrors('Failed to update Work Log.');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // TODO: Cascade delete
        $entries = LogEntry::where('log_id', '=', $id)->get();
        $deletedItemCount = 0;

        foreach ($entries as $entry) {
            $deletedItemCount += EntryItem::where('log_entry_id', '=', $entry->id)->delete();
        }

        $deletedEntryCount = LogEntry::where('log_id', '=', $id)->delete();

        if (Log::destroy($id)) {
            $message = 'Log deleted.'.
                ' '.$deletedEntryCount.' entries deleted.'.
                ' '.$deletedItemCount.' items deleted.';
            return redirect()
                ->action('WorkLogController@index')
                ->with(['message' => $message]);
        }

        redirect()->back()->with(['message' => 'Failed to delete Work Log.']);
    }
}
