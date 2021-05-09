@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
           
    <section class="">
               
        <div class="container-fluid d-flex justify-content-evenly mt-5">
            <aside>
                <ul class="sidebar ml-0 mr-5">
                    <li><a href="/home">Home</a> </li>
                    <li><a href="/residents">Residents</a> </li>
                    <li><a href="">Reports</a> </li>
                    <li><a href="">Blotter</a> </li>
                    <li><a href="">Certificates</a> </li>
                    <li><a href="">Officials</a> </li>
                </ul>
            </aside>

            <div class="col-sm-10 text-align-center">

            {{-- <a href="{{ route('residents.create')}}" class="btn btn-secondary mb-3">CREATE</a> --}}
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
                                <div class="form-group col-sm-3">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="address" id="" placeholder="Enter address" required>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Contact</label>
                                    <input type="number" class="form-control" name="contact" id="" placeholder="Enter contact number" required>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Birthdate</label>
                                    <input type="date" class="form-control" name="birthdate" id="" placeholder="Enter birthdate" required>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Age</label>
                                    <input type="number" class="form-control" name="age" id="" placeholder="Enter age" required>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <label for="">Gender</label>
                                    <select class="form-control" name="gender" id="" required>
                                        <option value=""></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Voter Status</label>
                                    <select class="form-control" name="voter" id="" required>
                                        <option value=""></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Senior Citizen</label>
                                    {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                                    <select class="form-control" name="senior" id=""  required>
                                        <option value=""></option>
                                        <option value="senior">Senior</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="">Differently Abled Person</label>
                                    {{-- <input type="text" class="form-control" id="" placeholder="Enter info"> --}}
                                    <select class="form-control" name="dap" id=""  required>
                                        <option value=""></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
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

                <table class="table table-striped table-hover table-bordered">
                    <thead class="text-center bg-dark text-white">
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Address</th>
                        {{-- <th scope="col">Contact</th> --}}
                        {{-- <th scope="col">Birthdate</th> --}}
                        <th scope="col">Age</th>
                        {{-- <th scope="col">Gender</th> --}}
                        {{-- <th scope="col">Voter Status</th> --}}
                        <th scope="col">Senior</th>
                        <th scope="col">Differently Abled</th>
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
                                <td class="text-center"><a class="btn btn-success btn-sm" href="{{ route('residents.show', $resident->id)}}">View</a> <a class="btn btn-primary btn-sm" href="{{ route('residents.edit', $resident->id)}}">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- <span class="container mt-2">
                     {{ $residents->links() }}
                </span> --}}         
            </div>
        </div>
     
    </section>
                
        </div>
    </div>
</div>
@endsection