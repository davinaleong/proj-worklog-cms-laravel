@extends('layouts.app')

@section('content')
<!-- Page Sub-Heading -->
<h2 class="h4 mb-3 text-gray-800">Settings</h2>

<!-- Note Alert -->
<div class="alert alert-primary">
    <i class="fas fa-exclamation-triangle"></i> You are now <strong>editing</strong> this page.
</div>

<!-- Page Content -->
<form class="row" method="POST" action="">
    <!-- Companies Table -->
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-body">

                <h3 class="h5 mb-3 text-gray-800">Companies</h3>

                <!-- Add/Remove/Edit Companies Table Form -->
                <div class="table-responsive">
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
                                <label>Removed</label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="company1-title" value="The Pixel Age"
                                               class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="company1-project_code" value="TPA"
                                               class="form-control form-control-sm" required>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="date" name="company1-period_started_on" value="01-05-2018"
                                           class="form-control" required>
                                    <div class="input-group-prepend input-group-append">
                                        <div class="input-group-text">-</div>
                                    </div>
                                    <input type="date" name="company1-period_ended_on" value="01-05-2019"
                                           class="form-control" required>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="company1-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="company2-title" value="The Shipyard Private Limited"
                                               class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="company2-project_code" value="TSY"
                                               class="form-control form-control-sm" required>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="date" name="company2-period_started_on" value="01-11-2015"
                                           class="form-control" required>
                                    <div class="input-group-prepend input-group-append">
                                        <div class="input-group-text">-</div>
                                    </div>
                                    <input type="date" name="company2-period_ended_on" value="01-05-2018"
                                           class="form-control" required>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="company2-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><sup class="text-uppercase text-success">NEW</sup></td>
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="company3-title"
                                               class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="company3-project_code"
                                               class="form-control form-control-sm" required>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="input-group input-group-sm">
                                    <input type="date" name="company3-period_started_on"
                                           class="form-control" required>
                                    <div class="input-group-prepend input-group-append">
                                        <div class="input-group-text">-</div>
                                    </div>
                                    <input type="date" name="company3-period_ended_on"
                                           class="form-control" required>
                                </div>
                            </td>
                            <td>
                                <button type="button" name="company3-remove-new"
                                        class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-primary">
                                    <i class="fas fa-fw fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                        </tfoot>
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
                <!-- Projects Form Table -->
                <div class="table-responsive">
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
                                <label>Removed</label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <input type="text" name="project1-name" class="form-control form-control-sm"
                                       value="Personal Project" required>
                            </td>
                            <td>
                                <input type="text" name="project1-code" class="form-control form-control-sm"
                                       value="PROJ" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="project1-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <input type="text" name="project2-name" class="form-control form-control-sm"
                                       value="Prototype / Proof-of-Concept" required>
                            </td>
                            <td>
                                <input type="text" name="project2-code" class="form-control form-control-sm"
                                       value="POC" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="project2-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><sup class="text-uppercase text-success">NEW</sup></td>
                            <td>
                                <input type="text" name="project3-name" class="form-control form-control-sm" required>
                            </td>
                            <td>
                                <input type="text" name="project3-code" class="form-control form-control-sm" required>
                            </td>
                            <td>
                                <button type="button" name="company3-remove-new"
                                        class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>
                                <button type="button" name="company-add"
                                        class="btn btn-sm btn-link text-primary">
                                    <i class="fas fa-fw fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                        </tfoot>
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
                <!-- Years Form Table -->
                <div class="table-responsive">
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
                                <label>Removed</label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <input type="text" name="year1-name" class="form-control form-control-sm"
                                       value="2019" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="year1-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <input type="text" name="year2-name" class="form-control form-control-sm"
                                       value="2018" placeholder="YYYY" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="year2-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <input type="text" name="year3-name" class="form-control form-control-sm"
                                       value="2017" placeholder="YYYY" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="year3-remove" value="remove" checked>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><sup class="text-uppercase text-success">NEW</sup></td>
                            <td>
                                <input type="text" name="year3-name" class="form-control form-control-sm"
                                       placeholder="YYYY" required>
                            </td>
                            <td>
                                <button type="button" name="year3-remove-new" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <td colspan="2">&nbsp;</td>
                        <td>
                            <button type="button" name="company-add"
                                    class="btn btn-sm btn-link text-primary">
                                <i class="fas fa-fw fa-plus"></i>
                            </button>
                        </td>
                        </tfoot>
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
                <!-- Day-types Form Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <label>ID</label>
                            </th>
                            <th>
                                <label>Name <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Icon (FA) <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Color (Hex) <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Removed</label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <input type="text" name="daytype1-name" class="form-control form-control-sm"
                                       value="Misc" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype1-icon_fa" class="form-control"
                                           value="fas fa-fw fa-question" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-question"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype1-color_hex" class="form-control form-control-sm"
                                       value="#9e9e9e" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype1-remove" value="remove" checked>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <input type="text" name="daytype2-name" class="form-control form-control-sm"
                                       value="Others" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype2-icon_fa" class="form-control"
                                           value="fas fa-fw fa-question" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-question"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype2-color_hex" class="form-control form-control-sm"
                                       value="#9e9e9e" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype2-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <input type="text" name="daytype3-name" class="form-control form-control-sm"
                                       value="Work Day (regular)" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype3-icon_fa" class="form-control"
                                           value="fas fa-fw fa-laptop-code" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-laptop-code"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype3-color_hex" class="form-control form-control-sm"
                                       value="#607d8b" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype3-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <input type="text" name="daytype4-name" class="form-control form-control-sm"
                                       value="Public Holiday" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype4-icon_fa" class="form-control"
                                           value="fas fa-fw fa-calendar" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-calendar"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype4-color_hex" class="form-control form-control-sm"
                                       value="#009688" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype4-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <input type="text" name="daytype5-name" class="form-control form-control-sm"
                                       value="Annual Leave" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype5-icon_fa" class="form-control"
                                           value="fas fa-fw fa-umbrella-beach" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-umbrella-beach"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype5-color_hex" class="form-control form-control-sm"
                                       value="#ff9800" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype5-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <input type="text" name="daytype6-name" class="form-control form-control-sm"
                                       value="Medical Leave" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype6-icon_fa" class="form-control"
                                           value="fas fa-fw fa-stethoscope" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-stethoscope"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype6-color_hex" class="form-control form-control-sm"
                                       value="#e91e63" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype6-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <input type="text" name="daytype7-name" class="form-control form-control-sm"
                                       value="Compassionate Leave" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype7-icon_fa" class="form-control"
                                           value="fas fa-fw fa-hand-holding-heart" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-hand-holding-heart"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype7-color_hex" class="form-control form-control-sm"
                                       value="#8e24aa" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype7-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <input type="text" name="daytype8-name" class="form-control form-control-sm"
                                       value="Company Events" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype8-icon_fa" class="form-control"
                                           value="fas fa-fw fa-building" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-building"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype8-color_hex" class="form-control form-control-sm"
                                       value="#3f51b5" required>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox"
                                           name="daytype8-remove" value="remove">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><sup class="text-uppercase text-success">NEW</sup></td>
                            <td>
                                <input type="text" name="daytype9-name"
                                       class="form-control form-control-sm" required>
                            </td>
                            <td>
                                <div class="input-group input-group-sm mb-3">
                                    <input type="text" name="daytype9-icon_fa" class="form-control"
                                           placeholder="fas fa-fw fa-flag" required>
                                    <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-fw fa-flag"></i>
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="color" name="daytype9-color_hex" class="form-control form-control-sm"
                                       required>
                            </td>
                            <td>
                                <button type="button" name="daytype9-remove-new"
                                        class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <td colspan="4">&nbsp;</td>
                        <td>
                            <button type="button" name="company-add"
                                    class="btn btn-sm btn-link text-primary">
                                <i class="fas fa-fw fa-plus"></i>
                            </button>
                        </td>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class="col-12 text-right my-3">
        <button type="button" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-check fa-sm"></i> Submit
        </button>
        <button type="reset" class="btn btn-sm btn-link text-secondary">
            <i class="fas fa-trash-alt fa-sm"></i> Cancel
        </button>
    </div>
</form>
<!-- ./row -->
@endsection
