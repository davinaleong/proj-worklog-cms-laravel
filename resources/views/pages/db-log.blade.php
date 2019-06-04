@extends('layouts.app')

@section('content')
<!-- Database Log Content -->
<div class="row">
    <!-- Legend Column -->
    <div class="col-12 col-lg-3 order-lg-last">

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="h5 mb-3 text-gray-800">
                    <i class="fas fa-fw fa-shapes"></i> Legend
                </h3>

                <div class="table-responsive mb-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Symbol</th>
                            <th>Definition</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>O</td>
                            <td>Others</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>Create</td>
                        </tr>
                        <tr>
                            <td>R</td>
                            <td>Retrieve</td>
                        </tr>
                        <tr>
                            <td>U</td>
                            <td>Update</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>Auth</td>
                        </tr>
                        <tr>
                            <td>T</td>
                            <td>Transaction</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="h5 mb-3 text-gray-800">
                    <i class="fas fa-fw fa-table"></i> Source Tables
                </h3>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr><th>Source Table</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>Profiles</td></tr>
                        <tr><td>Logs</td></tr>
                        <tr><td>Log Entries</td></tr>
                        <tr><td>Entry Items</td></tr>
                        <tr><td>Admin</td></tr>
                        <tr><td>Settings</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-12 col-lg-9">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="h5 mb-3 text-gray-800">
                    <i class="fas fa-fw fa-database"></i> Database Logs
                </h3>

                <div class="table-responsive">
                    <table class="table table-bordered" id="tableActivityLogs" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Log</th>
                            <th>Source / IDs</th>
                            <th>Action</th>
                            <th>Timestamp</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Log</th>
                            <th>Source / IDs</th>
                            <th>Action</th>
                            <th>Timestamp</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>User logged in</td>
                            <td>Profiles/1</td>
                            <td>L</td>
                            <td>29 May 2019 13:45:34</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>User created a new Log</td>
                            <td>
                                Profiles/1,<br>
                                Logs/12,<br>
                                LogEntries/56-60,<br>
                                EntryItems/168-179,<br>
                            </td>
                            <td>C</td>
                            <td>29 May 2019 14:04:23</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>User added a new record to Day-type settings.</td>
                            <td>
                                Profiles/1,<br>
                                DayTypes/9<br>
                            </td>
                            <td>C</td>
                            <td>29 May 2019 14:15:02</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>User modified an existing Log record.</td>
                            <td>
                                Profiles/1,<br>
                                Logs/12,<br>
                                LogEntries/57,<br>
                                EntryItems/170,<br>
                            </td>
                            <td>U</td>
                            <td>29 May 2019 14:19:53</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ./row -->
@endsection
