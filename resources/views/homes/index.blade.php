@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-evenly p-0">

    <div class="col-lg-2 bg-info border-right">
        <ul class="list-unstyled font-weight-bold flex-lg-column ">
            <img src="img/brgy-logo800.png" alt="brgylogo" class="ml-3 mt-5 mb-5" style="height: 150px; width: 150px"> 
            <li class="h5 pb-5"><a href="{{ route('home') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-home"></i> Home</a></li>
            <li class="h5 pb-5"><a href="{{ route('residents.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-users"></i> Residents</a> </li>
            <li class="h5 pb-5"><a href="{{ route('reports.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-sticky-note"></i> Reports</a> </li>
            <li class="h5 pb-5"><a href="{{ route('blotters.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-book"></i> Blotters</a> </li>
            <li class="h5 pb-5"><a href="#" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-folder-open"></i> Certificates</a> </li>
            <li class="h5 pb-5"><a href="{{ route('officials.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-user"></i> Officials</a> </li>
        </ul>
    </div>
    

    <div class="col-lg-10 bg-light">

        <div class="container-fluid d-flex justify-content-around row-sm-3 mt-5">
            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4 ">TOTAL POPULATION <br> <i class="fa fa-users"></i> {{ $residents }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>

            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4 ">REGISTERED VOTERS <br> <i class="fa fa-id-card"></i> {{ $voters }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>

            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4">SENIOR <br> CITIZENS <br> <i class="fa fa-blind"></i> {{ $seniors }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>

            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4 ">DIFFERENTLY ABLED <br> <i class="fa fa-wheelchair"></i> {{ $daps }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div> 
        </div>

        <div class="container-fluid d-flex justify-content-around row-sm-3 mt-5">
            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4 ">MALE RESIDENT <br> <i class="fa fa-users"></i> {{ $male }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>

            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4 ">FEMALE RESIDENT <br> <i class="fa fa-id-card"></i> {{ $female }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>

            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4">SOLO PARENT <br> <i class="fa fa-blind"></i> {{ $solo }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>

            <div class="box text-light w-100 h-25 mr-3">
                <h4 class="bg-dark rounded font-weight-bold p-4 ">PENDING CASES <br> <i class="fa fa-wheelchair"></i> {{ $pending }} <br> <span class="text-light"><a  href="">Click here.. </a></span> </h4>
            </div>  
        </div>

    </div>
</div>  

@endsection


