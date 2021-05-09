@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('residents.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group  col-sm-4">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="firstname" id="" placeholder="Enter name" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Middle Name</label>
                <input type="text" class="form-control" name="middlename" id="" placeholder="Enter middle name">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="" placeholder="Enter lastname" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" id="" placeholder="Enter address" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Contact</label>
                <input type="text" class="form-control" name="contact" id="" placeholder="Enter contact number" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Age</label>
                <input type="text" class="form-control" name="age" id="" placeholder="Enter age" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="">Gender</label>
                <select class="form-control" name="gender" id="" required>
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Voter Status</label>
                <select class="form-control" name="voter" id="" required>
                    <option value=""></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Senior Citizen</label>
                {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                <select class="form-control" name="senior" id=""  required>
                    <option value=""></option>
                    <option value="senior">Senior</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="{{ route('residents.index')}}">Back</a>
    </form>
</div>

@endsection