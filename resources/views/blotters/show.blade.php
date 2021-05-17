@extends('layouts.app')

@section('content')

<h1 class="font-weight-bold text-center mt-3 mb-3">BLOTTER RECORD</h1>
    <div class="container col-lg-12 d-flex justify-content-between ">

        <div class="container col-md-5 justify-content-center">

            <div class="blotterBox">
                <label for="title">Case no:<p class="text-danger text-uppercase">{{ $blotter->case }}</p></label>
            </div>

            <div class="blotterBox">
                <label for="title">Complainant:<p class="text-danger text-uppercase">{{ $blotter->complainant }}</p></label>
            </div>

            <div class="blotterBox">
                <label for="title">Dependant:<p class="text-danger text-uppercase">{{ $blotter->dependant }}</p></label>
            </div>

            <div class="blotterBox">
                <label for="title">Date of Filing:<p class="text-danger text-uppercase">{{ $blotter->dateFile }}</p></label>
            </div>

            <div class="blotterBox">
                <label for="title">Person in charge:<p class="text-danger text-uppercase">{{ $blotter->inCharge }}</p></label>
            </div>

            <div class="blotterBox">
                <label for="title">Status:<p class="text-danger text-uppercase">{{ $blotter->status }}</p></label>
            </div>

        </div>

        <div class="container col-md-7">
            <div class="blotterBox">
                <textarea class="p-3" name="description" id="" cols="80" rows="18" readonly>{{ $blotter->description}}</textarea>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center text-center">
        <a class="btn btn-secondary btn-sm mr-3" href="{{ route('blotters.index')}}">Back</a>
        <a class="btn btn-primary btn-sm mr-3" href="{{ route('blotters.edit', $blotter->id)}}"><i class="fa fa-edit"></i> Edit Blotter</a>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
            Delete
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Deleting Blotter</h5>
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
                <form action="{{ route('blotters.destroy', $blotter->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                </div>
            </div>
            </div>
        </div>
        
    </div>

    
@endsection