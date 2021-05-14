@extends('layouts.app')

@section('content')

<section>
   
    <div class="container d-flex justify-content-around mt-5">

       
       
        <div class="col-sm-6 text-center">
            <h1>Resident Image</h1>
        </div>

        <div class="container  col-sm-6 d-flex justify-content-evenly">

                <ul class="list-unstyled col-sm-5">   
                    <li><span>Firstname:</span></li>
                    <li><span>Middlename:</span></li>
                    <li><span>Lastname:</span></li>
                    <li><span>Address:</span></li>
                    <li><span>Contact:</span></li>
                    <li><span>Birthdate:</span></li>
                    <li><span>Age:</span></li>
                    <li><span>Gender:</span></li>
                    <li><span>Voter Status:</span></li>
                    <li><span>Senior Citezen:</span></li>
                    <li><span>Differently Abled Person:</span></li>
                </ul>  

                <ul class="list-unstyled col-sm-7 text-uppercase">   
                    <li>{{ $resident->firstname }}</li>
                    <li>{{ $resident->middlename}}</li>
                    <li>{{ $resident->lastname }}</li>
                    <li>{{ $resident->address }}</li>
                    <li>{{ $resident->contact }}</li>
                    <li>{{ $resident->birthdate }}</li>
                    <li>{{ $resident->age }}</li>
                    <li>{{ $resident->gender }}</li>
                    <li>{{ $resident->voter }}</li>
                    <li>{{ $resident->senior }}</li>
                    <li>{{ $resident->dap }}</li>
                </ul>  
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5 text-center">
        <a class="btn btn-secondary btn-sm mr-3" href="{{ route('residents.index')}}">Back</a>
        <a class="btn btn-primary btn-sm mr-3" href="{{ route('residents.edit', $resident->id)}}">Edit Resident</a>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
            Delete
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Deleting Resident</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    This option cannot be undone. <br>
                    Are you sure you want to <strong class="text-danger">Delete</strong> ?
      
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                <form action="{{ route('residents.destroy', $resident->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        
       
    </div>     
 
</section>
    
@endsection