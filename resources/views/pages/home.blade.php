@extends('layouts.app')

@section('content')
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        @include('partials.page-heading')

        <!-- Content Row -->
        <div class="row">

            <!-- Add-One (Log Entry) Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2 clickable worklog-card-new">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">New Log Entry</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Add One</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-plus fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Row Header -->
            <div class="col-12 mb-3">
                <h2 class="h5 mb-0 text-gray-800">2019</h2>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card border-left-success shadow mb-4 clickable worklog-card">
                    <div class="card-body">

                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <i class="fas fa-fw fa-plus"></i> NEW
                        </div>

                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 11</h4>

                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 31</div>
                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 30</div>
                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 29</div>
                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 28</div>
                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 27</div>

                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 10</h4>

                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 24</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 23</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 22</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 20</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 21</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 9</h4>

                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 17</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 16</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 15</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 14</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> May 13</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 8</h4>

                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 10</div>
                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 9</div>
                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 8</div>
                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 7</div>
                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 6</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 7</h4>

                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 3</div>
                        <div class="wl-text-annual-leave"><i class="fas fa-fw fa-umbrella-beach"></i> May 2</div>
                        <div class="wl-text-public-holiday"><i class="fas fa-fw fa-calendar"></i> May 1</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 30</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 29</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 6</h4>

                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 26</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 25</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 24</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 23</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 22</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 5</h4>

                        <div class="wl-text-public-holiday"><i class="fas fa-fw fa-calendar"></i> Apr 19</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 18</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 17</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 16</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 15</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 4</h4>

                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 12</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 11</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 10</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 9</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 8</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 3</h4>

                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 5</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 4</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 3</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 2</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Apr 1</div>
                    </div>
                </div>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 2</h4>

                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Mar 29</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Mar 28</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Mar 27</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Mar 26</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Mar 25</div>
                    </div>
                </div>
            </div>

            <!-- Row Header -->
            <div class="col-12 mb-3">
                <h2 class="h5 mb-0 text-gray-800">2018</h2>
            </div>

            <!-- Work Log Card -->
            <div class="col-xl-4 col-md-6 mb-3">
                <div class="card shadow mb-4 clickable worklog-card">
                    <div class="card-body">
                        <h4 class="m-0 font-weight-bold text-secondary pb-3">Week 1</h4>

                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Dec 30</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Dec 29</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Dec 28</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Dec 27</div>
                        <div class="wl-text-work"><i class="fas fa-fw fa-laptop-code"></i> Dec 26</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection
