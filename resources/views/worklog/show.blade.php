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
                    btn btn-sm btn-outline-primary mr-1">
                                <i class="fas fa-pen fa-sm"></i> Edit
                            </a>
                            <button class="btn btn-sm btn-outline-danger"
                                data-toggle="modal" data-target="#deleteModal">
                                <i class="fas fa-trash fa-sm"></i> Delete
                            </button>
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

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete this Work Log?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">This action cannot be undone.</div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">
                        <i class="fas fa-fw fa-ban"></i> Cancel</button>
                    <form id="form-delete" method="POST" action="{{ route('worklog.destroy', ['id' => $log->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-fw fa-trash"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
