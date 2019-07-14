@extends('layouts.app')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Work Log Card -->
        <div class="col-12">
            <div class="card border-left-primary shadow mb-4 worklog-card">
                <form class="card-body" method="POST" action="{{ route('worklog.store') }}">
                    @csrf

                    <!-- Day-Task Header -->
                    <div class="row no-gutters align-items-center">
                        <div class="col">

                            <!-- Note Alert -->
                            <div class="alert alert-primary">
                                <i class="fas fa-exclamation-triangle"></i> You are creating a <strong>New</strong> work-log entry.
                            </div>

                            @include('partials.message-alert')
                            @include('partials.error-alert')

                            <!-- Work Log Tags -->
                            <div class="d-flex align-items-center mb-1">
                                <div class="text-xs font-weight-bold text-success text-uppercase">
                                    <i class="fas fa-fw fa-plus"></i> NEW
                                </div>
                            </div>

                            <!-- Work Log Title -->
                            <div class="form-group">
                                <label for="title">
                                    Title <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="title_log" class="form-control form-control-lg"
                                       placeholder="Title" value="{{ old('title') }}" required>
                            </div>

                            <!-- Work Log Company & Year -->
                            <div class="form-row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="code_company">Company <span class="text-danger">*</span></label>
                                        <select name="code_company" class="form-control" required>
                                            <option value="">- Select Company -</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->code_company }}" {{ (old("code_company") == $company->code_company ? "selected":"") }}>{{ $company->title_company }} ({{ $company->code_company }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="year_id">Year <span class="text-danger">*</span></label>
                                        <select name="year_id" class="form-control" required>
                                            <option value="">- Select Year -</option>
                                            @foreach ($years as $year)
                                                <option value="{{ $year->id }}" {{ (old("year_id") == $year->id ? "selected":"") }}>{{ $year->title_year }}</option>
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
                                <textarea name="remarks" class="form-control" rows="3">{{ old('remarks') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <h4>Entries</h4>
                    <!-- Entry List Group -->
                    <ul class="list-group mb-3">
                        @for ($i = 0; $i < 5; ++$i)
                            <!-- Entry  -->
                            <li class="list-group-item">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase">
                                        ENTRY #{{ $i + 1 }}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="entries[{{ $i }}][title_entry]">Day Title <span class="text-danger">*</span></label>
                                            <input type="text" name="entries[{{ $i }}][title_entry]" class="form-control"
                                                   placeholder="Entry Title" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="entries[{{ $i }}][code_type]">Day-Type <span class="text-danger">*</span></label>
                                            <select name="entries[{{ $i }}][code_type]" class="form-control" required>
                                                <option value="">- Select Day-type -</option>
                                                @foreach ($dayTypes as $dayType)
                                                <option value="{{ $dayType->code_type }}">{{ $dayType->title_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input id="entry{{ $i }}-count" name="entries[{{ $i }}][count_item]" type="hidden" value="1">

                                <!-- Entry Items (Tasks) Table -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th><label>Project Code</label></th>
                                            <th><label>Task Item</label></th>
                                            <th><label>Remove</label></th>
                                        </tr>
                                        </thead>
                                        <tbody id="entry{{ $i }}-tbody">
                                        <!-- Item #0 (count: 1) -->
                                        <tr id="entry{{$i}}-item0-row">
                                            <td>
                                                <select name="entries[{{ $i }}][items][0][code_project]"
                                                        class="form-control form-control-sm" required>
                                                    <option value="">- Select Project Code</option>
                                                    @foreach ($projects as $project)
                                                    <option value="{{ $project->code_project }}">{{ $project->title_project }} ({{ $project->code_project }})</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="entries[{{ $i }}][items][0][title_item]"
                                                       class="form-control form-control-sm" required>

                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox"
                                                           name="entries[{{ $i }}][items][0][remove]" value="remove">
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                            <td>
                                                <button id="entry{{ $i }}-add" type="button"
                                                        class="btn btn-sm btn-link text-primary">
                                                    <i class="fas fa-fw fa-plus"></i></button>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </li>
                        @endfor
                    </ul>

                    <!-- Published Checkbox -->
                    <div class="form-group">
                        <div class="form-check">
                            <label for="published">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="published"
                                           value="published" {{ (old('published') ? 'checked' : '') }}>
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
    <script src="{{ asset('js/create-log-form.js') }}"></script>
@endsection
