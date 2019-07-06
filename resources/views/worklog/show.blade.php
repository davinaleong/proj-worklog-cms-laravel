@extends('layouts.app')

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Work Log Card -->
        <div class="col-12">

            <div class="card shadow mb-4">
                <div class="card-body">

                @include('partials.message-alert')

                <!-- Day-Task Header -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">

                            <!-- Work Log Tags -->
                            <div class="d-flex align-items-center mb-1">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mx-1">
                                    <i class="fas fa-fw fa-building"></i> {{ $log->company['title_company'] }}
                                </div>
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mx-1">
                                    <i class="fas fa-fw fa-calendar"></i> {{ $log->year['title_year'] }}
                                </div>
                            </div>

                            <!-- Work Log Title -->
                            <h4 class="m-0 font-weight-bold pb-3">
                                {{ $log->title_log }}
                            </h4>
                        </div>

                        <!-- Header Actions -->
                        <div class="col-auto">
                            <a href="{{ route('worklog.edit', ['id' => $log->id]) }}" class="d-none d-sm-inline-block
                    btn btn-sm btn-outline-primary shadow-sm">
                                <i class="fas fa-pen fa-sm"></i> Edit
                            </a>
                        </div>
                    </div>

                    <!-- Day List items (Tasks)-->
                    <ul class="list-group">
                        @foreach ($log->entries as $entry)
                        <li class="list-group-item">
                            <h5 style="color: {{ $entry->dayType['color_hex'] }}">
                                <i class="{{ $entry->dayType['icon_fa'] }}"></i> {{ $entry->title_entry }}
                            </h5>

                            <ol>
                                @foreach ($entry->items as $item)
                                <li><code class="wl-project-code">{{ $item->project['code_project'] }}</code>:&nbsp;
                                    {{ $item->title_item }}</li>
                                @endforeach
                            </ol>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>

    </div>
@endsection
