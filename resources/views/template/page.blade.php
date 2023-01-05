<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link type="text/css" rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset("css/bootstrap.css") }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="form-group col-md-12">
        <div >
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="pull-right">Not Yet  a T&M Member</i>
            <br>
                    {{-- <h2><i> Themes & Motifs </i></h2> --}}
            <div class="form-group">
                <div class="d-flex">
                   <a href="" class=""> <i>Sign In</i> </a>

                </div>
            </div>
                
        </div>
    </div>

    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">  Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="{{ asset('js/bootstrap.js') }}"></script> --}}

</html>