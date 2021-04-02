@extends('layouts.app')


@if (auth()->user()->is_admin == 1)

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospects <small class="text-muted">Showing All Prospects</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Create Prospect</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->

        @if ($prospects->count())
            {{ $prospects->links() }}
            @foreach ($prospects as $prospect)
                @include('admin.prospects.partials.prospect-card', ['prospect' => $prospect])
            @endforeach

        @endif

    </div>

@endsection

@else


    @if (auth()->user()->is_admin == 0)

@section('content')



    <div class="container">

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospects <small class="text-muted">Showing All Prospects</small></h1>

                </div>
            </div>
        </div><!-- /.card -->

        @if ($prospects->count())
            {{ $prospects->links() }}
            @foreach ($prospects as $prospect)
                @include('admin.prospects.partials.prospect-card', ['prospect' => $prospect])
            @endforeach

        @endif

    </div>
@endsection

@else
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Contact admin to access this page') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@endif
@endif
