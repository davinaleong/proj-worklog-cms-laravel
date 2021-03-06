@extends('layouts.app')

@section('content')
    <div class="row">
        @include('partials.message-alert')

        @foreach ($years as $year)
            @if (count($year->logs) > 0)
            <!-- Row Header -->
            <div class="col-12 mb-3">
                <h2 class="h5 mb-0 text-gray-800">{{ $year->title_year }}</h2>
            </div>

                @foreach($year->logs as $log)
                    @if ($log->published == 1)
                    <!-- Work Log Card -->
                    <div class="col-xl-4 col-md-6 mb-3">
                        <div class="card shadow mb-4 clickable clickable worklog-card"
                             onclick="goto('{{ route('worklog.show', ['id' => $log->id]) }}')">
                            <div class="card-body">

                                <h4 class="m-0 font-weight-bold text-secondary pb-3">{{ $log->title_log }}</h4>
                                <p>
                                    <span class="badge badge-primary">
                                        <i class="fas fa-fw fa-building"></i> {{ $log->company['title_company'] }}
                                    </span>
                                </p>

                                @foreach ($log->entries as $entry)
                                    <div style="color: {{ $entry->dayType['color_hex'] }}">
                                        <i class="{{ $entry->dayType['icon_fa'] }}"></i> {{ $entry->title() }}</div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
@endsection
