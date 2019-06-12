@extends('layouts.app')

@section('content')
    <!-- Page Sub-Heading -->
    <h2 class="h4 mb-3 text-gray-800"><i class="fas fa-fw fa-tags"></i> Tags</h2>

    @include('partials.message-alert')
    @include('partials.error-alert')

    <!-- Warning Alert -->
    <div class="alert alert-warning">
        <h5 class="alert-heading">
            <i class="fas fa-exclamation-triangle"></i> Warning
        </h5>
        <p>You are now <strong>editing</strong> this page.</p>
    </div>

    <!-- Page Content -->
    <div class="row">

        <!-- Companies Table -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Companies</h3>
                    <!-- Companies Table Form -->
                    <form id="form-company" method="POST" action="{{ route('tag.update') }}">
                        <div class="table-responsive">
                            @csrf
                            {{ method_field('PUT') }}
                            <input id="model-company" type="hidden" name="model" value="Company">
                            <input id="count-company" type="hidden" name="count" value="{{ count($companies) }}">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>ID</label>
                                    </th>
                                    <th>
                                        <label>Company <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Period <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Delete</label>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="tbody-company">
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>
                                            <div class="form-row">
                                                <div class="col">
                                                    <input type="text" name="company[{{ $company->id }}][title]"
                                                           value="{{ $company->title_company }}"
                                                           class="form-control form-control-sm">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" name="company[{{ $company->id }}][code]"
                                                           value="{{ $company->code_company }}"
                                                           class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group input-group-sm">
                                                <input type="date" name="company[{{ $company->id }}][period_started_on]"
                                                       value="{{ $company->fieldPeriodStartedOn() }}"
                                                       class="form-control">
                                                <div class="input-group-prepend input-group-append">
                                                    <div class="input-group-text">-</div>
                                                </div>
                                                <input type="date" name="company[{{ $company->id }}][period_ended_on]"
                                                       value="{{ $company->fieldPeriodEndedOn() }}"
                                                       class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                       name="company[{{ $company->id }}][remove]" value="remove">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                                <i class="fas fa-check fa-sm"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-sm btn-link text-secondary">
                                                <i class="fas fa-trash-alt fa-sm"></i> Cancel
                                            </button>
                                        </td>
                                        <td>
                                            <button id="add-company" type="button" name="company[add]"
                                                    class="btn btn-sm btn-link text-primary">
                                                <i class="fas fa-fw fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class="col-12 col-lg-6">

            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Projects</h3>
                    <!-- Projects Form Table -->
                    <form id="form-project" method="POST" action="{{ route('tag.update') }}">
                        <div class="table-responsive">
                            @csrf
                            {{ method_field('PUT') }}
                            <input id="model-project" type="hidden" name="model" value="Project">
                            <input id="count-project" type="hidden" name="count" value="{{ count($projects) }}">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>ID</label>
                                    </th>
                                    <th>
                                        <label>Project <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Code <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Delete</label>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="tbody-project">
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>
                                            <input type="text" name="project[{{ $project->id }}][title]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $project->title_project }}">
                                        </td>
                                        <td>
                                            <input type="text" name="project[{{ $project->id }}][code]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $project->code_project }}">
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                       name="project[{{ $project->id }}][remove]" value="remove">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                                <i class="fas fa-check fa-sm"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-sm btn-link text-secondary">
                                                <i class="fas fa-trash-alt fa-sm"></i> Cancel
                                            </button>
                                        </td>
                                        <td>
                                            <button id="add-project" type="button" name="project[add]"
                                                    class="btn btn-sm btn-link text-primary">
                                                <i class="fas fa-fw fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Years Table -->
        <div class="col-12 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Years</h3>
                    <!-- Years Form Table -->
                    <form id="form-year" method="POST" action="{{ route('tag.update') }}">
                        <div class="table-responsive">
                            @csrf
                            {{ method_field('PUT') }}
                            <input id="model-year" type="hidden" name="model" value="Year">
                            <input id="count-year" type="hidden" name="count" value="{{ count($years) }}">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>ID</label>
                                    </th>
                                    <th>
                                        <label>Year <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Delete</label>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="tbody-year">
                                @foreach ($years as $year)
                                    <tr>
                                        <td>{{ $year->id }}</td>
                                        <td>
                                            <input type="text" name="year[{{ $year->id }}][title]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $year->title_year }}">
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                       name="year[{{ $year->id }}][remove]" value="remove">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                            <i class="fas fa-check fa-sm"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-sm btn-link text-secondary">
                                            <i class="fas fa-trash-alt fa-sm"></i> Cancel
                                        </button>
                                    </td>
                                    <td>
                                        <button id="add-year" type="button"
                                                class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i>
                                        </button>
                                    </td>
                                </tfoot>
                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Day-types Table -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Day-types</h3>
                    <!-- Day-types Form Table -->
                    <form id="form-daytype" method="POST" action="{{ route('tag.update') }}">
                        <div class="table-responsive">
                            @csrf
                            {{ method_field('PUT') }}
                            <input id="model-daytype" type="hidden" name="model" value="DayType">
                            <input id="count-daytype" type="hidden" name="count" value="{{ count($dayTypes) }}">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <label>ID</label>
                                    </th>
                                    <th>
                                        <label>Title <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Code <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Icon (FA) <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Color (Hex) <span class="text-danger">*</span></label>
                                    </th>
                                    <th>
                                        <label>Delete</label>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="tbody-daytype">
                                @foreach ($dayTypes as $dayType)
                                    <tr>
                                        <td>{{ $dayType->id }}</td>
                                        <td>
                                            <input type="text" name="daytype[{{ $dayType->id }}][title]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $dayType->title_type }}">
                                        </td>
                                        <td>
                                            <input type="text" name="daytype[{{ $dayType->id }}][code]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $dayType->code_type }}">
                                        </td>
                                        <td>
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="text" name="daytype[{{ $dayType->id }}][icon_fa]" class="form-control"
                                                       value="{{ $dayType->icon_fa }}">
                                                <div class="input-group-append">
                                                  <span class="input-group-text" id="basic-addon2">
                                                    <i class="{{ $dayType->icon_fa }}"></i>
                                                  </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="color" name="daytype[{{ $dayType->id }}][color_hex]"
                                                   class="form-control form-control-sm"
                                                   value="{{ $dayType->color_hex }}">
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="checkbox"
                                                       name="daytype[{{ $dayType->id }}][remove]" value="remove">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td colspan="5">
                                        <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                            <i class="fas fa-check fa-sm"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-sm btn-link text-secondary">
                                            <i class="fas fa-trash-alt fa-sm"></i> Cancel
                                        </button>
                                    </td>
                                    <td>
                                        <button id="add-daytype" type="button" name="daytype[add]"
                                                class="btn btn-sm btn-link text-primary">
                                            <i class="fas fa-fw fa-plus"></i>
                                        </button>
                                    </td>
                                </tfoot>
                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- ./row -->
@endsection

@section('scripts')
    <!-- Page Level Scripts -->
    <script src="{{ asset('js/tag-edit-form.js') }}"></script>
@endsection
