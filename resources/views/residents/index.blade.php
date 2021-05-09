@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
           
    <section>
               
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

            <a href="{{ route('residents.create')}}" class="btn btn-secondary mb-3">CREATE</a>
                <table class="table table-striped table-hover table-bordered">
                    <thead class="text-center bg-dark text-white">
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Voter Status</th>
                        <th scope="col">Senior</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody class="text-capitalize">
                        @foreach ($residents as $resident)
                            <tr>        
                                <td>{{ $resident->firstname }} {{ $resident->middlename}} {{ $resident->lastname }}</td>
                                <td>{{ $resident->address }}</td>
                                <td>{{ $resident->contact }}</td>
                                <td>{{ $resident->age }}</td>
                                <td>{{ $resident->gender }}</td>
                                <td>{{ $resident->voter }}</td>
                                <td>{{ $resident->senior }}</td>
                                <td><a class="btn btn-success" href="{{ route('residents.show', $resident->id)}}">View</a>
                               <form action="{{ route('residents.destroy', $resident->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-danger btn-sm">Delete</button>
                                </form>
                                </td>
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