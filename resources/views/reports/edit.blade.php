@extends('layouts.app')

@section('content')

<div class="container justify-content-center p-0">

    <h1 class="text-center text-primary font-weight-bold mt-5">REPORT</h1>
    <form action="{{ route('reports.update', $report->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="form-group  col-sm-4">
                <label for="">Report title:</label>
                <input type="text" class="form-control text-uppercase" name="title" id="" value="{{ $report->title }}" placeholder="Enter report title.." required>
            </div>
            
        </div>

        <div class="row">
            <div class="form-group col-sm-12">
                <label for="">Report description:</label>
                <textarea name="desc" id="" cols="100" rows="10" class="form-control" placeholder="Enter report description.."  required>{{ $report->desc }}</textarea>
                
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="{{ route('reports.index')}}">Cancel</a>
    </form>
</div>
    
@endsection