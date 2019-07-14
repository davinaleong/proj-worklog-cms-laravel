@extends('layouts.app')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Work Log Card -->
        <div class="col-12">

            <div class="card border-left-primary shadow mb-4 worklog-card">
                <form class="card-body" method="POST" action="{{ route('worklog.update', ['id' => $log->id]) }}">
                    @csrf
                    @method('PUT')

                    <!-- Day-Task Header -->
                    <div class="row no-gutters align-items-center">
                        <div class="col">

                            <!-- Note Alert -->
                            <div class="alert alert-primary">
                                <i class="fas fa-exclamation-triangle"></i> You are editing an <strong>existing</strong> work-log entry.
                            </div>

                            @include('partials.message-alert')
                            @include('partials.error-alert')

                            <!-- Work Log Tags -->
                            <div class="d-flex align-items-center mb-1">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mr-1">
                                    <i class="fas fa-fw fa-pen"></i> EDITING
                                </div>

                                <div class="text-xs font-weight-bold text-info text-uppercase mx-1">
                                    <i class="fas fa-fw fa-hashtag"></i> LOG {{ $log->id }}
                                </div>
                            </div>

                            <!-- Work Log Title -->
                            <div class="form-group">
                                <label for="title_log">
                                    Title <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="title_log" class="form-control form-control-lg" placeholder="Title *"
                                       value="{{ old('title_log') ? old('title_log') : $log->title_log }}" required>
                            </div>

                            <!-- Work Log Company & Year -->
                            <div class="form-row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="code_company">Company <span class="text-danger">*</span></label>
                                        <select name="code_company" class="form-control" required>
                                            <option value="">- Select Company -</option>
                                            @php
                                                $code_company = $log->code_company;
                                                if (old('code_company')) {
                                                    $code_company = old('code_company');
                                                }
                                            @endphp
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->code_company }}" {{ ($code_company == $company->code_company ? "selected":"") }}>{{ $company->title_company }} ({{ $company->code_company }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="year_id">Year <span class="text-danger">*</span></label>
                                        <select name="year_id" class="form-control" required>
                                            <option value="">- Select Year -</option>
                                            @php
                                                $year_id = $log->year_id;
                                                if (old('code_company')) {
                                                    $year_id = old('year_id');
                                                }
                                            @endphp
                                            @foreach ($years as $year)
                                                <option value="{{ $year->id }}" {{ ($year_id == $log->year_id ? "selected":"") }}>{{ $year->title_year }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Work Log Remarks -->
                            <div class="form-group mb-5">
                                <label for="title">
                                    Remarks
                                </label>
                                <textarea name="remarks" class="form-control" rows="3">{{ old('remarks') ? old('remarks') : $log->remarks }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Entry List Group -->
                    <ul class="list-group mb-3">
                        @foreach ($log->entries as $key=>$entry)
                        <!-- Log Entry -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center mb-1">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase">
                                    ENTRY #{{ $key + 1 }}
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="entries[{{ $key }}][title_entry]">Day Title <span class="text-danger">*</span></label>
                                        @php
                                            $title_entry = $entry->title_entry;
                                            if (old('entry['.$key.'][title_entry]')) {
                                                $title_entry = old('entry['.$key.'][title_entry]');
                                            }
                                        @endphp
                                        <input type="text" name="entries[{{ $key }}][title_entry]" class="form-control"
                                               placeholder="Entry Title" value="{{ $title_entry }}" required>
                                        <input type="hidden" name="entries[{{ $key }}][id]" value="{{ $entry->id }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="entries[{{ $key }}][code_type]">Day-Type <span class="text-danger">*</span></label>
                                        <select name="entries[{{ $key }}][code_type]" class="form-control" required>
                                            <option value="">- Select Day-type -</option>
                                            @php
                                                $code_type = $entry->code_type;
                                                if (old('code_company')) {
                                                    $code_type = old('entry['.$key.'][code_type]');
                                                }
                                            @endphp
                                            @foreach ($dayTypes as $dayType)
                                                <option value="{{ $dayType->code_type }}" {{ ($code_type == $dayType->code_type ? "selected":"") }}>{{ $dayType->title_type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input id="entry{{ $key }}-count" name="entries[{{ $key }}][count_item]"
                                   type="hidden" value="{{ count($entry->items) }}">

                            <!-- Entry Line Items (Tasks) Table -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><label>#</label></th>
                                        <th>
                                            <label>
                                                Project Code <span class="text-danger">*</span>
                                            </label>
                                        </th>
                                        <th>
                                            <label>
                                                Task Item <span class="text-danger">*</span>
                                            </label>
                                        </th>
                                        <th>Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody id="entry{{$key}}-tbody">
                                    @foreach ($entry->items as $itemKey=>$item)
                                    <!-- Entry Item -->
                                    <tr>
                                        <td>
                                            {{ $itemKey + 1 }}
                                            <input type="hidden" name="entries[{{ $key }}][items][{{ $itemKey }}][id]" value="{{ $item->id }}">
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <select name="entries[{{ $key }}][items][{{ $itemKey }}][code_project]"
                                                        class="form-control form-control-sm" required>
                                                    <option value="">- Select Project Code</option>
                                                    @php
                                                        $code_project = $item->code_project;
                                                        if (old('entries['.$key.'][items]['.$itemKey.'][code_project]')) {
                                                            $code_project = old('entries['.$key.'][items]['.$itemKey.'][code_project]');
                                                        }
                                                    @endphp
                                                    @foreach ($projects as $project)
                                                        <option value="{{ $project->code_project }}" {{ ($code_project == $project->code_project ? "selected" : "") }}>{{ $project->title_project }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        @php
                                                        $show_project = $item->show_project == 1 ? 'show' : '';
                                                        if (old('entries['.$key.'][items]['.$itemKey.'][show_project]') == 'show') {
                                                            $show_project = 'show';
                                                        }
                                                        @endphp
                                                        <input type="checkbox" name="entries[{{ $key }}][items][{{ $itemKey }}][show_project]"
                                                               value="show" {{ ($show_project == 'show' ? 'checked' : '') }}>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $title_item = $item->title_item;
                                                if (old('entries['.$key.'][items]['.$itemKey.'][title_item]')) {
                                                    $title_item = old('entries['.$key.'][items]['.$itemKey.'][title_item]');
                                                }
                                            @endphp
                                            <input type="text" name="entries[{{ $key }}][items][{{ $itemKey }}][title_item]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $title_item }}" required>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                       name="entries[{{ $key }}][items][{{ $itemKey }}][remove]" value="remove">
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                        <td>
                                            <button id="entry{{ $key }}-add" type="button" class="btn btn-sm btn-link text-primary">
                                                <i class="fas fa-fw fa-plus"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <!-- Published Checkbox -->
                    <div class="form-group">
                        <div class="form-check">
                            <label for="published">
                                <div class="form-check">
                                    @php
                                    $checked = $log->published == 1 ? 'published' : '';
                                    if (old('published') == 'published') {
                                        $checked = old('published');
                                    }
                                    @endphp
                                    <input class="form-check-input" type="checkbox" name="published"
                                        value="published" {{ ($checked == 'published' ? 'checked' : '') }}>
                                    <label class="form-check-label" for="published">
                                        Publish this log
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="mt-3 text-right">
                        <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-check fa-sm"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-sm btn-link text-secondary">
                            <i class="fas fa-trash-alt fa-sm"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/edit-log-form.js') }}"></script>
@endsection
