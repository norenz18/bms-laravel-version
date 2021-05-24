@extends('layouts.app')

@section('content')

<div class="container justify-content-center p-0">

    <h1 class="text-center text-primary font-weight-bold mt-5 mb-5">RESIDENT</h1>
    <form action="{{ route('residents.update', $resident->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="form-group  col-sm-4">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="firstname" id="" placeholder="Enter name" value="{{ $resident->firstname}}" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Middle Name</label>
                <input type="text" class="form-control" name="middlename" id="" placeholder="Enter middle name" value="{{ $resident->middlename}}">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="" placeholder="Enter lastname" value="{{ $resident->lastname}}" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" id="" placeholder="Enter address" value="{{ $resident->address}}" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="">Contact</label>
                <input type="number" class="form-control" name="contact" id="" placeholder="Enter contact number" value="{{ $resident->contact}}" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" id="" placeholder="Enter birthdate" value="{{ $resident->birthdate}}" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="">Age</label>
                <input type="number" class="form-control" name="age" id="" placeholder="Enter age" value="{{ $resident->age}}" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-3">
                <label for="">Gender</label>
                <select class="form-control" name="gender" id="" value="{{ $resident->gender}}" required>
                    <option>{{ $resident->gender}}</option>
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group col-sm-2">
                <label for="">Civil Status</label>
                <select class="form-control" name="civil" id="" required>
                    <option>{{ $resident->civil}}</option>
                    <option value=""></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Solo Parent">Solo Parent</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for="">Voter Status</label>
                <select class="form-control" name="voter" id="" required>
                    <option >{{ $resident->voter}}</option>
                    <option value=""></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for="">Senior Citizen</label>
                {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                <select class="form-control" name="senior" id=""   required>
                    <option >{{ $resident->senior}}</option>
                    <option value=""></option>
                    <option value="senior">Senior</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label for="">Differently Abled Person</label>
                {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                <select class="form-control" name="dap" id=""  required>
                    <option >{{ $resident->dap}}</option>
                    <option value=""></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="{{ route('residents.index')}}">Cancel</a>
    </form>
</div>
    
@endsection