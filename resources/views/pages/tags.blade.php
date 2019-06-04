@extends('layouts.app')

@section('content')
<!-- Page Sub-Heading -->
<div class="row no-gutters align-items-center">
    <div class="col mr-2">
        <h2 class="h4 mb-3 text-gray-800">Work Log Tags</h2>
    </div>

    <!-- Header Actions -->
    <div class="col-auto">
        <a href="settings-edit.html" class="d-none d-sm-inline-block
            btn btn-sm btn-outline-primary shadow-sm">
            <i class="fas fa-pen fa-sm"></i> Edit
        </a>
    </div>
</div>

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
                            <th>Removed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>The Pixel Age (TPA)</td>
                            <td>May 2018 - May 2019</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>The Shipyard Private Limited (TSY)</td>
                            <td>Nov 2015 - May 2018</td>
                            <td>&nbsp;</td>
                        </tr>
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
                            <th>Code</th>
                            <th>Removed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Personal Project</td>
                            <td>PROJ</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Prototype / Proof-of-Concept</td>
                            <td>POC</td>
                            <td>&nbsp;</td>
                        </tr>
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
                            <th>Removed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>2019</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2018</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2017</td>
                            <td><i class="fas fa-fw fa-check text-danger"></i></td>
                        </tr>
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
                            <th>Name</th>
                            <th>Icon (FA)</th>
                            <th>Color (Hex)</th>
                            <th>Removed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Misc</td>
                            <td><i class="fas fa-lg fa-question"></td>
                            <td><span style="color: #9e9e9e">#9e9e9e</span></td>
                            <td><i class="fas fa-fw fa-check text-danger"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Others</td>
                            <td><i class="fas fa-lg fa-question"></td>
                            <td><span style="color: #9e9e9e">#9e9e9e</span></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Work Day (regular)</td>
                            <td><i class="fas fa-lg fa-laptop-code"></td>
                            <td><span style="color: #607d8b">#607d8b</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Public Holiday</td>
                            <td><i class="fas fa-lg fa-calendar"></td>
                            <td><span style="color: #009688">#009688</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Annual Leave</td>
                            <td><i class="fas fa-lg fa-umbrella-beach"></td>
                            <td><span style="color: #ff9800">#ff9800</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Medical Leave</td>
                            <td><i class="fas fa-lg fa-calendar"></td>
                            <td><span style="color: #e91e63">#e91e63</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Compassionate Leave</td>
                            <td><i class="fas fa-lg fa-hand-holding-heart"></td>
                            <td><span style="color: #8e24aa">#8e24aa</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Company Events</td>
                            <td><i class="fas fa-lg fa-building"></td>
                            <td><span style="color: #3f51b5">#3f51b5</span></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /. row -->
@endsection
