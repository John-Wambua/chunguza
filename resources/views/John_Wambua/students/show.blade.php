@extends('John_Wambua.layouts.app')

@section('title')
    <title>School System</title>
@stop

@section('custom_style')
    <!-- Custom styles for this template -->
    <link href="{{asset("css/styles.css")}}" rel="stylesheet">
@stop

@section('content')
    <body >
    <div style=" max-width: 85em;" class="cover-container container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">School System</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link" href="/students/create">Student</a>
                    <a class="nav-link" href="/fees/create">Fees</a>

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/students">Registered Students </a>
                        <a class="dropdown-item" href="/fees">Fees Records</a>

                    </div>
                </nav>
            </div>
        </header>

        <div class="row">

            <div class="col-6">
                <h1 ><img src="https://img.icons8.com/color/48/000000/gender-neutral-user.png"/> {{$student->full_name}}</h1><br/>

                <div class="card" style="color: #383d41">
                    <h5 class="card-header"><strong>Student Details</strong></h5>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">

                                    <label>Student Number</label><br/>
                                    <input type="text" class="form-control" value="{{$student->student_number}}" readonly>
                                </div>
                                <div class="col">
                                    <label>Full Name</label><br/>
                                    <input type="text" class="form-control" value="{{$student->full_name}}" readonly>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col">
                                    <label>Date of Birth</label><br/>
                                    <input type="text" class="form-control" value="{{$student->date_of_birth}}" readonly>
                                </div>
                                <div class="col">
                                    <label>Address</label><br/>
                                    <input type="text" class="form-control" value="{{$student->address}}" readonly>
                                </div>
                            </div>
                        </form>
                        <a href="{{action('StudentsController@edit', $student->id)}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col-6">

                <h1>Fees records</h1><br/>

                <div style="height:310px;overflow: auto">
                <table class="table table-dark " >
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Number</th>
                        <th scope="col">Date of Payment</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fees as $fees)
                    <tr>
                        <th scope="row">{{$id++}}</th>
                        <td>{{$fees->student_number}}</td>
                        <td>{{$fees->date_of_payment}}</td>
                        <td>KSH {{$fees->amount}}/=</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        @stop

        @section('footer')
            <footer class="mastfoot mt-auto text-center">
                <div class="inner">
                    <p><a href="#">johnwambuadev</a> Copyright &#169 2020.</p>
                </div>
            </footer>
        @stop
    </div>
    </body>

