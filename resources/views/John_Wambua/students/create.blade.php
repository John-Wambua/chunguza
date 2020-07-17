@extends('John_Wambua.layouts.app')
@section('title')
    <title>Student</title>
@stop
@section('custom_style')
    <!-- Custom styles for this template -->
    <link href="{{asset("css/styles.css")}}" rel="stylesheet">
@stop

@section('content')
    <body class="text-center ">
    <div style=" max-width: 45em;" class=" cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">School System</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link active" href="/students/create">Student</a>
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


            <div class="card" style="color: #1b1e21">
                <h5 class="card-header"><strong>Register New Student</strong></h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <form method="post" action="/students">
                        @csrf
                        <div class="form-group">
                            <label>Student Number</label>
                            <input type="number" class="form-control" name="student_number">
                            <small id="emailHelp" class="form-text text-muted">Student number should be unique for each student.</small>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="full_name">
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
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
