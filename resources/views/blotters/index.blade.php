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

            <h1 class="text-center text-primary font-weight-bold mt-5">BLOTTER</h1>
                        
                    
            {{-- <a href="{{ route('residents.create')}}" class="btn btn-secondary mb-3">CREATE</a> --}}
            <button type="button" href="" class="btn btn-secondary mb-3" data-toggle="modal" data-target=".bd-example-modal-xl">ADD BLOTTER</button>
    
            <div class="modal fade bd-example-modal-xl" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content p-3">
                    <div class="modal-header mb-3">
                        <h3 class="modal-title text-secondary" id="exampleModalLongTitle">ADD BLOTTER RECORDS</h3>    
                    </div>
                    
                    <div class="container">
                        <form action="{{ route('blotters.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group  col-sm-3">
                                    <label for="">Case No.</label>
                                    <input type="number" class="form-control" name="case" id="" placeholder="Case no.." required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">Complainant</label>
                                    <input type="text" class="form-control text-capitalize" name="complainant" id="" placeholder="Enter complainant's name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">Dependant</label>
                                    <input type="text" class="form-control text-capitalize" name="dependant" id="" placeholder="Enter dependant's name" required>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <label for="">Date of Filing</label>
                                    <input type="date" class="form-control" name="dateFile" id="" placeholder="" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">Person in Charge</label>
                                    <input type="text" class="form-control text-capitalize" name="inCharge" id="" placeholder="Enter person in charge name" required>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="">Status</label>
                                    <select class="form-control" name="status" id="" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value=""></option>
                                        <option value="Pending">Pending</option>
                                        <option value="On-going">On-going</option>
                                        <option value="Resolved">Resolved</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <textarea class="form-control" name="description" id="" cols="100" rows="10"></textarea>
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
                        <th data-field="Case No" data-sortable="true" data-switchable="false" scope="col">Case No.</th>
                        <th data-field="Complainant" data-sortable="true" scope="col">Complainant</th>
                        <th data-field="Dependant" data-sortable="true" scope="col">Dependant</th>
                        <th data-field="Date of Filing" data-sortable="true" scope="col">Date of Filing</th>
                        <th data-field="Status" data-sortable="true" scope="col">Status</th>
                        <th data-field="Person in Charge" data-sortable="true" scope="col">Person in Charge</th>
                        <th scope="col">Actions</th>
    
                    </tr>
                    </thead>
                    <tbody class="text-capitalize text-center">
                        @foreach ($blotters as $blotter)
                            <tr>        
                                <td class="text-left">{{ $blotter->case }}</td>
                                <td class="text-left">{{ $blotter->complainant }}</td>
                                <td>{{ str_limit($blotter->dependant, 20) }}</td>
                                <td>{{ $blotter->dateFile }}</td>
                                <td>{{ $blotter->status }}</td>
                                <td >{{ $blotter->inCharge }}</td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-sm" href="{{ route('blotters.show', $blotter->id) }}"><i class="fa fa-eye"></i> View</a> 
                                    <a class="btn btn-primary btn-sm" href="{{ route('blotters.edit', $blotter->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection


