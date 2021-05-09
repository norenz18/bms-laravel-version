@extends('layouts.app')

@section('content')

<section>
               
    <div class="container d-flex justify-content-around mt-5">
       
        <div class="col-sm-6 text-center">
            <h1>Resident Image</h1>
        </div>

        <div class="container col-sm-6 d-flex justify-content-evenly">

                <ul class="col-sm-3 mr-3">   
                    <li><span>Firstname:</span></li>
                    <li><span>Middlename:</span></li>
                    <li><span>Lastname:</span></li>
                    <li><span>Address:</span></li>
                    <li><span>Contact:</span></li>
                    <li><span>Age:</span></li>
                    <li><span>Gender:</span></li>
                    <li><span>Voter:</span></li>
                    <li><span>Senior:</span></li>
                </ul>  

                <ul class="col-sm-9 text-capitalize">   
                    <li>{{ $resident->firstname }}</li>
                    <li>{{ $resident->middlename}}</li>
                    <li>{{ $resident->lastname }}</li>
                    <li>{{ $resident->address }}</li>
                    <li>{{ $resident->contact }}</li>
                    <li>{{ $resident->age }}</li>
                    <li>{{ $resident->gender }}</li>
                    <li>{{ $resident->voter }}</li>
                    <li>{{ $resident->senior }}</li>
                </ul>  
        </div>
    </div>
 
</section>
    
@endsection