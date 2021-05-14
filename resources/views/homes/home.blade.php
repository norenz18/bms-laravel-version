@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            
            <div class="container d-flex justify-content-around m-0">
                <div class="container-fluid ml-0">
                     <ul class="list-unstyled d-flex flex-lg-column p-5">
                         <li class="pb-5"><a href="/home">Home</a> </li>
                         <li class="pb-5"><a href="/residents">Residents</a> </li>
                         <li class="pb-5"><a href="/reports">Reports</a> </li>
                         <li class="pb-5"><a href="">Blotter</a> </li>
                         <li class="pb-5"><a href="">Certificates</a> </li>
                         <li class="pb-5"><a href="/officials">Officials</a> </li>
                     </ul>
                </div>
              
            <div class="container col-md-10 d-flex justify-content-between text-center ml-3 mr-0 mt-5">
                <div class="box">
                    <h3>TOTAL <br> POPULATION</h3>
                    <h2>1000</h2>
                </div>
                <div class="box">
                    <h3>PENDING <br> CASES</h3>
                    <h2>10</h2>
                </div>
                <div class="box">
                    <h3>SENIOR <br> CITIZENS</h3>
                    <h2>300</h2>
                </div>
                <div class="box">
                    <h3>DIFFERENTLY <br> ABLED PERSONS</h3>
                    <h2>20</h2>
                </div>
                
                
            </div>
    </div>
</div>
@endsection

  
