@extends('John_Wambua.layouts.app')

@section('title')
    <title>School System</title>
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


    <main role="main" class="inner cover">
        <h1 class="cover-heading">The School Fees System</h1>
        <p class="lead">Add new Students and record Fees at the click of a button</p>
        <p class="lead">
            <a href="/students/create" class="btn-lg btn-secondary">Student</a>
            <a href="/fees/create" class="btn-lg btn-secondary">Fees</a>
        </p>
    </main>
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

