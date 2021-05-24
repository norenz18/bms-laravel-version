@extends('layouts.app')

@section('content')

<section>
   
    <div class="container d-flex justify-content-around mt-5">

       
       
        <div class="col-sm-6 text-center">
            <h1>Brgy Official Image</h1>
        </div>

        <div class="container  col-sm-6 d-flex justify-content-evenly">

                <ul class="list-unstyled col-sm-5">   
                    <li><span>Rank:</span></li>
                    <li><span>Fullname:</span></li>
                    <li><span>Position:</span></li>
                    <li><span>Chairmanship:</span></li>
                   
                </ul>  

                <ul class="list-unstyled col-sm-7 text-uppercase">   
                    <li>{{ $official->rank }}</li>
                    <li>{{ $official->fullname}}</li>
                    <li>{{ $official->position }}</li>
                    <li>{{ $official->chairmanship }}</li>
               
                </ul>  
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5 text-center">
        <a class="btn btn-secondary btn-sm mr-3" href="{{ route('officials.index')}}">Back</a>
        <a class="btn btn-primary btn-sm mr-3" href="{{ route('officials.edit', $official->id)}}"><i class="fa fa-edit"></i> Edit Brgy Official</a>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
            Delete
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Deleting Brgy Official</h5>
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
                <form action="{{ route('officials.destroy', $official->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-bin"></i>Delete</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        
       
    </div>     
 
</section>
    
@endsection