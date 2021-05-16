@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('officials.update', $official->id )}}" method="POST">
        @csrf
        @method('PUT')
       <div class="row">
            <div class="form-group  col-sm-10">
                <label for="">Full Name</label>
                <input type="text" class="form-control text-capitalize" name="fullname" id="" value="{{ $official->fullname }}" placeholder="Enter name" required>
            </div>
            <div class="form-group col-sm-2">
                <label for="">Rank</label>
                <select class="form-control" name="rank" id="" value="" required>
                    <option value="{{ $official->rank }}">{{ $official->rank }}</option>
                    <option value="" disabled></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Position</label>
                <select class="form-control" name="position" id="" value="" required>
                    <option value="{{ $official->position }}">{{ $official->position }}</option>
                    <option value="" disabled></option>
                    <option value="Brgy. Captain">Brgy. Captain</option>
                    <option value="Kagawad">Kagawad</option>
                    <option value="Sk Chairperson">Sk Chairperson</option>
                    <option value="Secretary">Secretary</option>
                    <option value="Treasurer">Treasurer</option>
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Chairmanship</label>
                <select class="form-control" name="chairmanship" id="" value="" required>
                    <option value="{{ $official->chairmanship }}">{{ $official->chairmanship }}</option>
                    <option value="" disabled></option>
                    <option value="Presiding Officer">Presiding Officer</option>
                    <option value="Appropriations">Appropriations</option>
                    <option value="Peace & Order">Peace & Order</option>
                    <option value="Health, Social Services & Sanitation">Health, Social Services & Sanitation</option>
                    <option value="Education, Cultural Affairs & Tourism">Education, Cultural Affairs & Tourism</option>
                    <option value="Justice & Human Rights">Justice & Human Rights</option>
                    <option value="Public works & Infrastructure">Public works & Infrastructure</option>
                    <option value="Solid Waste Management">Solid Waste Management</option>
                    <option value="Youth & Sport Development">Youth & Sport Development</option>
                    <option value="Transportation, Communication & Public Service">Transportation, Communication & Public Service</option>
                    <option value="Women, Family Senior Citizens & Minors">Women, Family Senior Citizens & Minors</option>
                    <option value="Livelihood & Job Employment">Livelihood & Job Employment</option>
                    <option value="No Declared Chairmanship">- No Declared Chairmanship </option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="{{ route('officials.index') }}">Back</a>
    </form>
</div>
    
@endsection