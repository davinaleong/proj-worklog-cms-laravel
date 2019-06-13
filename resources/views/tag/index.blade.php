@extends('layouts.app')

@section('content')
    <!-- Page Sub-Heading -->
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <h2 class="h4 mb-3 text-gray-800"><i class="fas fa-fw fa-tags"></i> Tags</h2>
        </div>

        <!-- Header Actions -->
        <div class="col-auto">
            <a href="{{ route('tag.edit') }}" class="d-none d-sm-inline-block
            btn btn-sm btn-outline-primary shadow-sm">
                <i class="fas fa-pen fa-sm"></i> Edit
            </a>
        </div>
    </div>

    @include('partials.message-alert')
    @include('partials.error-alert')

    <!-- Page Content -->
    <div class="row">
        <!-- Companies Card-Table -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Companies</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company</th>
                                <th>Period</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>
                                        {{ $company->title_company }}&nbsp;
                                        (<code>{{ $company->code_company }}</code>)
                                    </td>
                                    <td>{{ $company->humanPeriodStartedOn() }} - {{ $company->humanPeriodEndedOn() }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class="col-12 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Projects</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Project</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->title_project }}
                                        (<code>{{ $project->code_project }}</code>)
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- Years Table -->
        <div class="col-12 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Years</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($years as $year)
                                <tr>
                                    <td>{{ $year->id }}</td>
                                    <td>{{ $year->title_year }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- Day-types Table -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <h3 class="h5 mb-3 text-gray-800">Day-types</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Icon (FA)</th>
                                <th>Color (Hex)</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dayTypes as $dayType)
                                <tr>
                                    <td>{{ $dayType->id }}</td>
                                    <td>{{ $dayType->title_type }}</td>
                                    <td><i class="{{ $dayType->icon_fa }}"></i></td>
                                    <td class="text-center text-light"
                                        style="background-color: {{ $dayType->color_hex }}">
                                        {{ $dayType->color_hex }}</td>
                                    <td>{{ $dayType->humanCreatedAt() }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /. row -->
@endsection
