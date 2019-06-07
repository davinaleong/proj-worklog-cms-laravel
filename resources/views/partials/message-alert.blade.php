@if (Session::has('message'))
    <div class="alert alert-primary">
        <h5 class="alert-heading">
            <i class="fas fa-fw fa-info"></i> Note
        </h5>
        <p>{{ Session::get('message') }}</p>
    </div>
@endif
