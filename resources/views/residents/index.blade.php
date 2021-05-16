@extends('layouts.app')

@section('content')

        <h1 class="text-center text-dark font-weight-bold mt-5">RESIDENTS</h1>

        <button type="button" href="{{ route('residents.create')}}" class="btn btn-secondary mb-3" data-toggle="modal" data-target=".bd-example-modal-xl">ADD RESIDENT</button>

        <div class="modal fade bd-example-modal-xl" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-5">
                <div class="modal-header mb-3">
                    <h3 class="modal-title text-secondary" id="exampleModalLongTitle">ADD RESIDENT INFORMATION</h3>    
                </div>
                
                <div class="container">
                    <form action="{{ route('residents.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group  col-sm-4">
                                <label for="">First Name</label>
                                <input type="text" class="form-control text-capitalize" name="firstname" id="" placeholder="Enter name" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Middle Name</label>
                                <input type="text" class="form-control text-capitalize" name="middlename" id="" placeholder="Enter middle name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control text-capitalize" name="lastname" id="" placeholder="Enter lastname" required>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label for="">Address</label>
                                <input type="text" class="form-control text-capitalize" name="address" id="" placeholder="Enter address" required>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="">Contact</label>
                                <input type="number" class="form-control" name="contact" id="" placeholder="Enter contact number" required>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="">Birthdate</label>
                                <input type="date" autocomplete="off" class="form-control" name="birthdate" id="" placeholder="Yyyy-mm-dd" required>
                            </div>
                            <div class="form-group col-sm-2 ">
                                <label for="">Age</label>
                                <input type="number" class="form-control" name="age" id="" placeholder="Enter age" required>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="form-group col-sm-2">
                                <label for="">Gender</label>
                                <select class="form-control" name="gender" id="" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="">Civil Status</label>
                                <select class="form-control" name="civil" id="" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Solo Parent">Solo Parent</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="">Voter Status</label>
                                <select class="form-control" name="voter" id="" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value=""></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="">Senior Citizen</label>
                                {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                                <select class="form-control" name="senior" id=""  required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value=""></option>
                                    <option value="Senior">Senior</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="">Differently Abled Person</label>
                                {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                                <select class="form-control" name="dap" id="" required>
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value=""></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-danger" data-dismiss="modal">Back</a>
                    </form>
                </div>
            </div>
        </div>
        </div>

            <table class="table table-striped table-hover table-bordered"
            
                data-toggle="table"
                data-pagination="true"
                data-search="true"
                data-search-align="left"
                data-show-columns="true"
                data-show-toggle="true"
                {{-- data-show-refresh="true" --}}
                data-show-fullscreen="true"
                {{-- data-show-pagination-switch="right" --}}
                data-pagination-pre-text="Previous"
                data-pagination-next-text="Next"
                data-pagination-h-align="left"
                data-pagination-detail-h-align="right"
                data-page-list="[10, 20, 30, 40, 50, All]" >
                
                <thead class="text-center bg-dark text-white">
                <tr>
                    <th data-field="Full Name" data-sortable="true" data-switchable="false" scope="col">Full Name</th>
                    <th data-field="address" data-sortable="true" scope="col">Address</th>
                    {{-- <th scope="col">Contact</th> --}}
                    {{-- <th scope="col">Birthdate</th> --}}
                    <th data-field="age" data-sortable="true" scope="col">Age</th>
                    {{-- <th scope="col">Gender</th> --}}
                    {{-- <th scope="col">Voter Status</th> --}}
                    <th data-field="senior" data-sortable="true" scope="col">Senior</th>
                    <th data-field="dap " data-sortable="true" scope="col">Differently Abled</th>
                    <th scope="col">Actions</th>

                </tr>
                </thead>
                <tbody class="text-capitalize text-center">
                    @foreach ($residents as $resident)
                        <tr>        
                            <td class="text-left">{{ $resident->firstname }} {{ $resident->middlename}} {{ $resident->lastname }}</td>
                            <td class="text-left">{{ $resident->address }}</td>
                            {{-- <td>{{ $resident->contact }}</td> --}}
                            {{-- <td>{{ $resident->birthdate }}</td> --}}
                            <td>{{ $resident->age }}</td>
                            {{-- <td>{{ $resident->gender }}</td> --}}
                            {{-- <td>{{ $resident->voter }}</td> --}}
                            <td>{{ $resident->senior }}</td>
                            <td>{{ $resident->dap }}</td>
                            <td class="text-center">
                                <a class="btn btn-success btn-sm" href="{{ route('residents.show', $resident->id)}}"><i class="fa fa-eye"></i> View</a> 
                                <a class="btn btn-primary btn-sm" href="{{ route('residents.edit', $resident->id)}}"><i class="fa fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>  

@endsection
