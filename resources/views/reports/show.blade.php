@extends('layouts.app')

@section('content')

<section>
   
    <div class="container col-lg-12 justify-content-center">
     
        <div class="container col-md-12 justify-content-center">

            <div class="col-md-8">
                <label for="title">Report title:<h1 class="text-danger text-uppercase">{{ $report->title }}</h1></label>
                
            </div>
           
            <div class="col-md-8">
                <textarea name="" id="" cols="150" rows="15" readonly>{{ $report->desc}}</textarea>
            </div>

        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5 text-center">
        <a class="btn btn-secondary btn-sm mr-3" href="{{ route('reports.index')}}">Back</a>
        <a class="btn btn-primary btn-sm mr-3" href="{{ route('reports.edit', $report->id)}}"><i class="fa fa-edit"></i> Edit Report</a>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
            Delete
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Deleting Report</h5>
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
                <form action="{{ route('reports.destroy', $report->id)}}" method="post">
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