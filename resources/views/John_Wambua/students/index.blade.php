@extends('John_Wambua.layouts.app')
@section('title')
    <title>Student</title>
@stop
@section('custom_style')
    <!-- Custom styles for this template -->
    <link href="{{asset("css/styles.css")}}" rel="stylesheet">
@stop

@section('content')
    <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">School System</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link " href="/students/create">Student</a>
                    <a class="nav-link" href="/fees/create">Fees</a>

                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/students">Registered Students </a>
                        <a class="dropdown-item" href="/fees">Fees Records</a>

                    </div>

                </nav>
            </div>
        </header>



        <h1  style="color: #ae1c17" align="center">Registered Students<img src="https://img.icons8.com/color/48/000000/conference-call.png"/></h1>
        <div style="height:400px;overflow: auto">
        <table class="table table-striped table-dark" >

            <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Student Number</th>
                <th scope="col">Full Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{$id++}}</th>
                <td>{{$student->student_number}}</td>
                <td>{{$student->full_name}}</td>
                <td>{{$student->date_of_birth}}</td>
                <td>{{$student->address}}</td>
                <td><a class="btn btn-primary" href="/students/{{$student->id}}" role="button">View</a></td>
                <td><a class="btn btn-danger" href="#" role="button">Delete</a></td>

            </tr>
                @endforeach

            </tbody>
        </table>
        </div>


        @stop

        @section('footer')
            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p><a href="#">johnwambuadev</a> Copyright &#169 2020.</p>
                </div>
            </footer>
        @stop
    </div>
    </body>
