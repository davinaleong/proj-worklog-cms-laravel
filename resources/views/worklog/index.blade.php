@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($logs as $log)
        <div class="col-xl-4 col-md-6 mb-3">
            <div class="card shadow mb-4 clickable worklog-card">
                <div class="card-body">

                    <h4 class="m-0 font-weight-bold text-secondary pb-3">{{ $log->title_log }}</h4>

{{--                    <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 31</div>--}}
{{--                    <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 30</div>--}}
{{--                    <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 29</div>--}}
{{--                    <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 28</div>--}}
{{--                    <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> May 27</div>--}}
                    @foreach ($log->entries as $entry)
                        <div class="wl-text-medical-leave"><i class="fas fa-fw fa-stethoscope"></i> {{ $entry->title_entry }}</div>
                    @endforeach

                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
