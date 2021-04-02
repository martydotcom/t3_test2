@extends('layouts.app')


@if (auth()->user()->is_admin == 1)

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

                        {{ __('You are logged in as admin!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    @else


        @if (auth()->user()->is_admin == 0)

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

                        {{ __('You are a user and can view prospects but cannot edit them ') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@else


    @if (auth()->user()->is_admin == 2)

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

                        {{ __('You are a newly registered user with limited access, please contact the administrator for more access') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


        @endif
        @endif
        @endif






