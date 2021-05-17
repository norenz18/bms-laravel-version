@extends('layouts.app')

@section('content')
<div class="container-fluid justify-content-center p-0">

            <h1 class="text-center text-primary font-weight-bold mt-5">BLOTTER</h1>
                    
                    <div class="container">
                        <form action="{{ route('blotters.update', $blotter->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="form-group  col-sm-3">
                                    <label for="">Case No.</label>
                                    <input type="number" class="form-control" name="case" id="" value="{{ $blotter->case }}" placeholder="Case no.." required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">Complainant</label>
                                    <input type="text" class="form-control text-capitalize" name="complainant" id="" value="{{ $blotter->complainant }}" placeholder="Enter complainant's name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">Dependant</label>
                                    <input type="text" class="form-control text-capitalize" name="dependant" id="" value="{{ $blotter->dependant }}" placeholder="Enter dependant's name" required>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <label for="">Date of Filing</label>
                                    <input type="date" class="form-control" name="dateFile" id="" value="{{ $blotter->dateFile }}" placeholder="" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">Person in Charge</label>
                                    <input type="text" class="form-control text-capitalize" name="inCharge" id="" value="{{ $blotter->inCharge }}" placeholder="Enter person in charge name" required>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status" id="" value="{{ $blotter->status }}" required>
                                        <option >{{ $blotter->status }}</option>
                                        <option value=""></option>
                                        <option value="Pending">Pending</option>
                                        <option value="On-going">On-going</option>
                                        <option value="Resolved">Resolved</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <textarea class="form-control" name="description" id="" cols="100" rows="10">{{ $blotter->description }}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="btn btn-danger" href="{{ route('blotters.index') }}">Back</a>
                        </form>
                    </div>

</div>















@endsection