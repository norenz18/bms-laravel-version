@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
           
            <div class="container d-flex justify-content-around m-0">
               <div class="container-fluid ml-0">
                    <ul class="list-unstyled d-flex flex-lg-column p-5">
                        <li class="pb-5"><a href="/home">Home</a></li>
                        <li class="pb-5"><a href="/residents">Residents</a> </li>
                        <li class="pb-5"><a href="/reports">Reports</a> </li>
                        <li class="pb-5"><a href="">Blotter</a> </li>
                        <li class="pb-5"><a href="">Certificates</a> </li>
                        <li class="pb-5"><a href="/officials">Officials</a> </li>
                    </ul>
                </div> 

                <div class="col-md-10  ml-3 mr-0 mt-5">
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

                    <table class="table-striped table-hover table-bordered col-lg-12">
                        <thead class="text-center bg-dark text-white">
                            <tr>
                                <th scope="col">Title</th>
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
                        
        
        </div>
    </div>
</div>
    
@endsection



