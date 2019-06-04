@extends('layouts.app')

@section('content')
<!-- Note Alert -->
<div class="alert alert-primary">
    <i class="fas fa-exclamation-triangle"></i> You are now <strong>editing</strong> this page.
</div>

<!-- Profile Content -->
<div class="row">
    <!-- Change Photo & Name Forms -->
    <div class="col-12 mb-3">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4 text-gray-800">
                    <i class="fas fa-fw fa-image"></i> Change Name / Photo
                </h2>

                <div class="row">
                    <!-- Name Form -->
                    <div class="col-12 col-md-6 mb-3">
                        <form name="form-change-name" method="POST" action="">
                            <div class="form-group row mb-2">
                                <label class="col col-form-label">Current Name</label>
                                <div class="col">
                                    <p class="form-control-plaintext form-control-sm">Davina Leong</p>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label class="col col-form-label">New Name</label>
                                <div class="col">
                                    <input type="text" name="new_name" class="form-control form-control-sm"
                                           required>
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div class="text-right my-3">
                                <button type="button" class="btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-check fa-sm"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-sm btn-link text-secondary">
                                    <i class="fas fa-trash-alt fa-sm"></i> Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Upload Photo Form -->
                    <div class="col-12 col-md-6 mb-3">
                        <div class="bg-gray-200 text-center shadow-sm p-3 mx-auto mb-2" style="width: 128px;">
                    <span class="fa-stack fa-2x ">
                      <i class="fas fa-user fa-stack-2x text-gray-500"></i>
                      <i class="fas fa-pen fa-stack-1x text-gray-200"></i>
                    </span>
                        </div>
                        <button href="#" class="btn btn-sm btn-primary shadow-sm mb-3 d-block mx-auto">
                            <i class="fas fa-fw fa-upload"></i> Upload Photo</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Change Email Form -->
    <div class="col-12 col-md-6 mb-3">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4 text-gray-800">
                    <i class="fas fa-fw fa-envelope"></i> Change Email
                </h2>

                <form name="form-change-email" method="POST" action="">
                    <div class="form-group row mb-3">
                        <label class="col col-form-label">Current Email</label>
                        <div class="col">
                            <p class="form-control-plaintext form-control-sm">davina.leong@example.com</p>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col col-form-label">New Email</label>
                        <div class="col">
                            <input type="email" name="new_email" class="form-control form-control-sm"
                                   required>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col col-form-label">Confirm New Email</label>
                        <div class="col">
                            <input type="email" name="confirm_new_email" class="form-control form-control-sm"
                                   required>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="text-right my-3">
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

    <!-- Change Password Form -->
    <div class="col-12 col-md-6 mb-3">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4 text-gray-800">
                    <i class="fas fa-fw fa-key"></i> Change Password
                </h2>

                <form name="form-change-password" method="POST" action="">
                    <div class="form-group row mb-3">
                        <label class="col col-form-label">Current Password</label>
                        <div class="col">
                            <input type="password" name="current_password" class="form-control form-control-sm"
                                   required>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col col-form-label">New Password</label>
                        <div class="col">
                            <input type="password" name="new_password" class="form-control form-control-sm"
                                   required>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col col-form-label">Confirm New Password</label>
                        <div class="col">
                            <input type="password" name="confirm_new_password" class="form-control form-control-sm"
                                   required>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="text-right my-3">
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
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
@endsection
