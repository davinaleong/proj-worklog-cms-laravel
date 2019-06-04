@extends('layouts.app')

@section('content')
<!-- Activity Log Content -->
<div class="row">
    <!-- Legend Column -->
    <div class="col-12 col-lg-3 order-lg-last">

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="h5 mb-3 text-gray-800">
                    <i class="fas fa-fw fa-shapes"></i> Legend
                </h3>

                <div class="table-responsive">
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
                            <td>L</td>
                            <td>Auth</td>
                        </tr>
                        <tr>
                            <td>N</td>
                            <td>Navigate (pages)</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>P</td>
                            <td>Profile</td>
                        </tr>
                        <tr>
                            <td>W</td>
                            <td>Work Log</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>Settings (Work Log)</td>
                        </tr>
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
                    <i class="fas fa-fw fa-chart-area"></i> Activity Log
                </h3>

                <div class="table-responsive">
                    <table class="table table-bordered" id="tableActivityLogs" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Log</th>
                            <th>Action</th>
                            <th>Timestamp</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Log</th>
                            <th>Action</th>
                            <th>Timestamp</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>Logged in</td>
                            <td>L</td>
                            <td>29 May 2019 13:45:34</td>
                        </tr>
                        <tr>
                            <td>Navigated to Work Log > View All page</td>
                            <td>N</td>
                            <td>29 May 2019 13:46:45</td>
                        </tr>
                        <tr>
                            <td>Navigated to Work Log > Add One page</td>
                            <td>N</td>
                            <td>29 May 2019 13:47:06</td>
                        </tr>
                        <tr>
                            <td>Added new Work Log entry (id: 11)</td>
                            <td>W</td>
                            <td>29 May 2019 14:04:23</td>
                        </tr>
                        <tr>
                            <td>Added a new Day-type (id: 9) in Settings</td>
                            <td>S</td>
                            <td>29 May 2019 14:15:02</td>
                        </tr>
                        <tr>
                            <td>Edited Work Log entry (id: 11)</td>
                            <td>W</td>
                            <td>29 May 2019 14:19:53</td>
                        </tr>
                        <tr>
                            <td>Logged in</td>
                            <td>L</td>
                            <td>29 May 2019 13:45:34</td>
                        </tr>
                        <tr>
                            <td>Navigated to Work Log > View All page</td>
                            <td>N</td>
                            <td>29 May 2019 13:46:45</td>
                        </tr>
                        <tr>
                            <td>Navigated to Work Log > Add One page</td>
                            <td>N</td>
                            <td>29 May 2019 13:47:06</td>
                        </tr>
                        <tr>
                            <td>Added new Work Log entry (id: 11)</td>
                            <td>W</td>
                            <td>29 May 2019 14:04:23</td>
                        </tr>
                        <tr>
                            <td>Added a new Day-type (id: 9) in Settings</td>
                            <td>S</td>
                            <td>29 May 2019 14:15:02</td>
                        </tr>
                        <tr>
                            <td>Edited Work Log entry (id: 11)</td>
                            <td>W</td>
                            <td>29 May 2019 14:19:53</td>
                        </tr>
                        <tr>
                            <td>Logged in</td>
                            <td>L</td>
                            <td>29 May 2019 13:45:34</td>
                        </tr>
                        <tr>
                            <td>Navigated to Work Log > View All page</td>
                            <td>N</td>
                            <td>29 May 2019 13:46:45</td>
                        </tr>
                        <tr>
                            <td>Navigated to Work Log > Add One page</td>
                            <td>N</td>
                            <td>29 May 2019 13:47:06</td>
                        </tr>
                        <tr>
                            <td>Added new Work Log entry (id: 11)</td>
                            <td>W</td>
                            <td>29 May 2019 14:04:23</td>
                        </tr>
                        <tr>
                            <td>Added a new Day-type (id: 9) in Settings</td>
                            <td>S</td>
                            <td>29 May 2019 14:15:02</td>
                        </tr>
                        <tr>
                            <td>Edited Work Log entry (id: 11)</td>
                            <td>W</td>
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

@section('scripts')
<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script>
    $(document).ready(function() {
        $('#tableActivityLogs').DataTable();
    });
</script>
@endsection
