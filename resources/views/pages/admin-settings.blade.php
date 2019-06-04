@extends('layouts.app')

@section('content')
<!-- Admin Settings Content -->
<div class="row">
    <!-- Actions Table -->
    <div class="col-12 col-lg-6">
        <!-- Work Log Card -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h3 class="h5 mb-3 text-gray-800">Log Actions</h3>
                <!-- Log Actions Table Form -->
                <form class="table-responsive" method="POST" action="">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <label>ID</label>
                            </th>
                            <th>
                                <label>Action <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Symbol <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Delete</label>
                            </th>
                        </tr>
                        </thead>
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
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Others" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="O" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Create" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="C" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Retrieve" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="R" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Update" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="U" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Delete" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="D" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Auth" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="A" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Transaction" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="T" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><sup class="text-uppercase text-success">NEW</sup></td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
    <!-- Source Tables -->
    <div class="col-12 col-lg-6">
        <!-- Work Log Card -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <h3 class="h5 mb-3 text-gray-800">Source Tables</h3>
                <!-- Source Table Form -->
                <form class="table-responsive" method="POST" action="">
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
                                <label>Symbol <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Group <span class="text-danger">*</span></label>
                            </th>
                            <th>
                                <label>Delete</label>
                            </th>
                        </tr>
                        </thead>
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
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Profiles" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="P" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Admin" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Log" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="L" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Work Log" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="LogEntries" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="E" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Work Log" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="EntryItems" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="I" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Work Log" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Years" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Y" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Tags" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Companies" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="C" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Tags" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Projects" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="R" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Tags" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       value="Day-Types" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="D" required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       value="Tags" required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><sup class="text-uppercase text-success">NEW</sup></td>
                            <td>
                                <input type="text" name="source0-name" class="form-control form-control-sm"
                                       required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       required>
                            </td>
                            <td>
                                <input type="text" name="source0-label" class="form-control form-control-sm"
                                       required>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-link text-danger">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- ./row -->
@endsection
