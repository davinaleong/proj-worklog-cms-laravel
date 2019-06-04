@extends('layouts.app')

@section('content')
<!-- Content Row -->
<div class="row">

    <!-- Work Log Card -->
    <div class="col-12">

        <div class="card border-left-success shadow mb-4">
            <div class="card-body">

                <!-- Day-Task Header -->
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <!-- Work Log Tags -->
                        <div class="d-flex align-items-center mb-1">
                            <div class="text-xs font-weight-bold text-success text-uppercase mr-1">
                                <i class="fas fa-fw fa-plus"></i> NEW
                            </div>
                            <div class="text-xs font-weight-bold text-info text-uppercase mx-1">
                                <i class="fas fa-fw fa-building"></i> Company B
                            </div>
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mx-1">
                                <i class="fas fa-fw fa-calendar"></i> 2019
                            </div>
                        </div>

                        <!-- Work Log Title -->
                        <h4 class="m-0 font-weight-bold pb-3">
                            Week 11
                        </h4>
                    </div>

                    <!-- Header Actions -->
                    <div class="col-auto">
                        <a href="existing-log-edit.html" class="d-none d-sm-inline-block
                    btn btn-sm btn-outline-primary shadow-sm">
                            <i class="fas fa-pen fa-sm"></i> Edit
                        </a>
                    </div>
                </div>

                <!-- Day List items (Tasks)-->
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5 class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 31</h5>

                        <ol>
                            <li><code class="wl-project-code">SSO</code>: Started on #61</li>
                            <li><code class="wl-project-code">SSO</code>: Minor bug fixes on #60</li>
                            <li><code class="wl-project-code">KLICK</code>: Assisted in testing mobile apps</li>
                            <li><code class="wl-project-code">SSO</code>: Researched on <code class="wl-code">schema.org</code></li>
                            <li><code class="wl-project-code">SSO</code>: Researched on Google Rich Snippets</li>
                        </ol>
                    </li>
                    <li class="list-group-item">
                        <h5 class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 30</h5>

                        <ol>
                            <li><code class="wl-project-code-others">Others</code>: Style examples</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: #issue-no</li>
                            <li><code class="wl-project-code">PROJ</code>: Added <code class="wl-code">User</code> module</li>
                            <li><code class="wl-project-code-others">Others</code>: Miscellaneous items with no direct relations to projects</li>
                        </ol>
                    </li>
                    <li class="list-group-item">
                        <h5 class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 29</h5>

                        <ol>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                        </ol>
                    </li>
                    <li class="list-group-item">
                        <h5 class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 28</h5>

                        <ol>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                        </ol>
                    </li>
                    <li class="list-group-item">
                        <h5 class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 27</h5>

                        <ol>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                            <li><code class="wl-project-code">PROJ</code>: Task item</li>
                        </ol>
                    </li>
                </ul>

            </div>
        </div>

    </div>

</div>
@endsection
