@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Yes I am logged in!') }}
                </div>
            </div> --}}
            <h1 class="text-center mt-5">This Page is Under Construction.</h1>
            <a class="btn btn-info" href="{{ route('residents.index')}}">Go to Residents</a>
        </div>
    </div>
</div>
@endsection

  
