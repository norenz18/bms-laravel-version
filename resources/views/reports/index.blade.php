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
        
        <h1 class="text-center text-danger font-weight-bold mt-5">REPORTS</h1>

                <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">ADD REPORT</button>
                
                <div class="modal fade bd-example-modal-lg" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content p-5">
                        <div class="modal-header mb-3">
                            <h3 class="modal-title text-secondary" id="exampleModalLongTitle">ADD REPORT INFORMATION</h3>    
                        </div>
                        
                        <div class="container">
                            <form action="{{ route('reports.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="">Report title:</label>
                                        <input type="text" class="form-control text-uppercase" name="title" id="" placeholder="Enter report title.." required>
                                    </div>
                                    
                                </div>
                        
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="">Report description:</label>
                                        <textarea name="desc" id="" cols="100" rows="10" class="form-control" placeholder="Enter report description.."  required></textarea>
                                        
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-danger" data-dismiss="modal">Back</a>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

                <table class="table-striped table-hover table-bordered col-lg-12"
                    
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
                                <th data-field="title" data-sortable="true" data-switchable="false" scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)     
                            <tr>
                                <td class="text-center text-capitalize" >{{$report->title}}</td>
                                <td class="text-center" >{{str_limit($report->desc,20)}}</td>
                                <td class="text-center" >{{ $report->created_at }}</td>
                                <td class="text-center"><a class="btn btn-success btn-sm" href="{{ route('reports.show', $report->id)}}">Read report..</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>   
    </div>
</div>
@endsection

