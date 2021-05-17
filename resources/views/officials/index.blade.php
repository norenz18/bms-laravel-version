@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-evenly p-0">

    <div class="col-lg-2 bg-info border-right">
        <ul class="list-unstyled font-weight-bold flex-lg-column ">
            <img src="img/brgy-logo800.png" alt="brgylogo" class="ml-3 mt-5 mb-5" style="height: 150px; width: 150px"> 
            <li class="h5 pb-5"><a href="{{ route('home') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-home"></i> Home</a></li>
            <li class="h5 pb-5"><a href="{{ route('residents.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-users"></i> Residents</a> </li>
            <li class="h5 pb-5"><a href="{{ route('reports.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-sticky-note"></i> Reports</a> </li>
            <li class="h5 pb-5"><a href="{{ route('blotters.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-book"></i> Blotters</a> </li>
            <li class="h5 pb-5"><a href="#" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-folder-open"></i> Certificates</a> </li>
            <li class="h5 pb-5"><a href="{{ route('officials.index') }}" class="text-dark text-decoration-none font-weight-bold"><i class="fa fa-user"></i> Officials</a> </li>
        </ul>
    </div>
    

    <div class="col-lg-10 bg-light">
        <h1 class="text-center text-success font-weight-bold mt-5">BRGY. OFFICIALS</h1>

        {{-- <a href="{{ route('residents.create')}}" class="btn btn-secondary mb-3">CREATE</a> --}}
        <button type="button" href="" class="btn btn-secondary mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">ADD BRGY OFFICIAL</button>

        <div class="modal fade bd-example-modal-lg" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-5">
                <div class="modal-header mb-3">
                    <h3 class="modal-title text-secondary" id="exampleModalLongTitle">ADD BRGY OFFICIAL INFORMATION</h3>    
                </div>
                
                <div class="container">
                    <form action="{{ route('officials.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-10">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control text-capitalize" name="fullname" id="" placeholder="Enter name" required>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="">Rank</label>
                                <select class="form-control" name="rank" id="" required>
                                    <option value="" disabled selected>Select</option>
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
                                <select class="form-control" name="position" id="" required>
                                    <option value="" disabled selected>-- Select --</option>
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
                                <select class="form-control" name="chairmanship" id="" required>
                                    <option value="" disabled selected>-- Select --</option>
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
                        <a class="btn btn-danger" data-dismiss="modal">Back</a>
                    </form>
                </div>
            </div>
        </div>
        </div>

            <table class="table table-striped table-hover table-bordered"
            
                data-toggle="table"
                data-pagination="false"
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
                
                <thead class=" text-center bg-dark text-white">
                <tr>
                    <th data-field="Full Name" data-sortable="true" data-switchable="false" scope="col" >Full Name</th>
                    <th data-field="rank" data-sortable="true" scope="col">Rank</th>
                    <th data-field="position" data-sortable="false" scope="col">Position</th>
                    <th data-field="chairmanship" data-sortable="false" scope="col"  >Chairmanship</th>
                    <th scope="col">Actions</th>

                </tr>
                </thead>
                <tbody class="text-capitalize text-center">
                    @foreach ($officials as $official)
                        <tr>        
                            <td class="text-left">{{ $official->fullname }}</td>
                            <td >{{ $official->rank }}</td>
                            <td>{{ $official->position }}</td>
                            <td>{{ $official->chairmanship }}</td>
                            <td class="text-center">
                                <a class="btn btn-success btn-sm" href="{{ route('officials.show', $official->id ) }}"> <i class="fa fa-eye"></i> View</a> 
                                <a class="btn btn-primary btn-sm" href="{{ route('officials.edit', $official->id )}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

