@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex justify-content-around row-sm-3 mt-5">
    <div class="box text-light w-100 h-25 mr-3">
        <h4 class="bg-dark rounded font-weight-bold p-4 ">TOTAL POPULATION <i class="fa fa-users ml-3 mb-2"></i> {{ $residents }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
    </div>

    <div class="box text-light w-100 h-25 mr-3">
        <h4 class="bg-dark rounded font-weight-bold p-4 ">REGISTERED VOTERS <i class="fa fa-id-card ml-5 pl-3 mb-2"></i> {{ $voters }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
    </div>

    <div class="box text-light w-100 h-25 mr-3">
        <h4 class="bg-dark rounded font-weight-bold p-4">SENIOR <br> CITIZENS <i class="fa fa-blind ml-5 pl-2 mb-2"></i> {{ $seniors }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
    </div>

    <div class="box text-light w-100 h-25 mr-3">
        <h4 class="bg-dark rounded font-weight-bold p-4 ">DIFFERENTLY ABLED <i class="fa fa-wheelchair ml-5 pl-4 mb-2"></i> {{ $daps }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
    </div> 
</div>

@endsection


