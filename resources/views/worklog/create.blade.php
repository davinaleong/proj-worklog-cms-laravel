@extends('layouts.app')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Work Log Card -->
        <div class="col-12">

            <div class="card border-left-primary shadow mb-4 worklog-card">
                <form class="card-body" method="POST" action="">
                    @csrf

                    <!-- Day-Task Header -->
                    <div class="row no-gutters align-items-center">
                        <div class="col">

                            <!-- Note Alert -->
                            <div class="alert alert-primary">
                                <i class="fas fa-exclamation-triangle"></i> You are creating a <strong>New</strong> work-log entry.
                            </div>

                            <!-- Work Log Tags -->
                            <div class="d-flex align-items-center mb-1">
                                <div class="text-xs font-weight-bold text-success text-uppercase">
                                    <i class="fas fa-fw fa-plus"></i> NEW
                                </div>
                            </div>

                            <!-- Work Log Title -->
                            <div class="col">
                                <div class="form-group">
                                    <label for="title">
                                        Title <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="title" class="form-control form-control-lg"
                                           placeholder="Title" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Entry List Group -->
                    <ul class="list-group">
                        @for ($i = 0; $i < 5; ++$i)
                            <!-- Entry  -->
                            <li class="list-group-item">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase">
                                        ENTRY #1
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="entry[{{ $i }}][title]">Day Title <span class="text-danger">*</span></label>
                                            <input type="text" name="entry[{{ $i }}][title]" class="form-control"
                                                   placeholder="Entry Title" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="entry[{{ $i }}][type]">Day-Type <span class="text-danger">*</span></label>
                                            <select name="entry[{{ $i }}][type]" class="form-control" required>
                                                <option value="">- Select Day-type -</option>
                                                @foreach ($dayTypes as $dayType)
                                                <option value="{{ $dayType->code_type }}">{{ $dayType->title_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input id="entry{{ $i }}-count" name="entry[{{ $i }}][count]" type="hidden" value="1">

                                <!-- Entry Items (Tasks) Table -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
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
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody id="entry{{ $i }}-tbody">
                                        <!-- Item #0 (count: 1) -->
                                        <tr id="entry{{$i}}-item0">
                                            <td>
                                                <select name="entry[{{ $i }}][0][project_code]"
                                                        class="form-control form-control-sm" required>
                                                    <option value="">- Select Project Code</option>
                                                    @foreach ($projects as $project)
                                                    <option value="{{ $project->code_project }}">{{ $project->title_project }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="entry[{{ $i }}][0][title_item]"
                                                       class="form-control form-control-sm" required>

                                            </td>
                                            <td>
                                                <button id="entry{{ $i }}-item0-remove" type="button"
                                                        class="btn btn-sm btn-link text-danger">
                                                    <i class="fas fa-fw fa-trash-alt"></i>
                                                </button>
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

                    <!-- Form Actions -->
                    <div class="mt-3 text-right">
                        <button type="button" class="btn btn-sm btn-primary shadow-sm">
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

