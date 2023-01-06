<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link type="text/css" rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body >
    <div class="form-group col-md-12">
        <div class="col-md-12">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="pull-right">Not Yet  a T&M Member?</i>
        </div>
        <div class="col-md-12 text-right">
            {{-- <a href=""  id="signin" class="signin text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sigin</a> | --}}
            <a href="#"  id="signin" class="signin text-secondary">Sigin</a> |
            <a href="#" id="joinus" class="joinus text-secondary">Join Us</a> |
            <a href="#" class="text-secondary">Location</a>
        </div>
        <div class="col-md-12">
            <span><h2 class="text-center"><i>Themes & Motifs</i></h2></span>
        </div>
    </div> 

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class=" container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item col-lg-offset-2">
                <a class=" nav-link active" aria-current="page" href="#">News & Promo</a>
            </li>
            <li class="nav-item col-lg-offset-1">
                <a class="nav-link" href="#">Fashion & Beauty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Planning</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bridal Pairs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Real Weddings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Suppliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Travel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
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
    <div class="modal fade" id="modal-info" tabindex="-1" aria-labelledby="modalInfoLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <h2 class="modal-title fs-6" id="modalInfoLabel">{{ __('Getting Married Soon? ') }}</h2>
                            </div>
                            <div class="row col-md-6">
                                <div class="col-md-11">
                                    <h2 class="modal-title fs-6" id="modalInfoLabel">{{ __('Are you a Supplier? ') }}</h2>
                                </div>
                                <div class="col-md-1">
                                    <button style="margin-left:50px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <p align="justify">{{ __("How do you begin forever? Let Themes & Motifs Help you in planning the most romantic day of your life. Rustic or Classic, lavish or austere, grand or intimate, themed or bespoked. you'll find ideas here to make your Big Day memorable, photographable, uniquely yours. ") }}</p>
                                <a href="{{url('loginBridesGroom')}}" id="brideGroom" type="submit" class="btn btn-primary"></a>
                            </div>
                            <div class="col-md-6">
                                <p align="justify">{{ __("Themes & Motifs has been connecting wedding suppliers like you with engaged couples for 20 more than years. If you are a legitimate wedding supplier, you may register your business and join our community creative professionals serving engaged couples from the Philippines and abroad") }}</p>
                                <a href="{{route('loginSupplier')}}" id="supplier" type="button" class="btn btn-primary" ></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        <div id="app">
            @yield('content')

        </div>
    </main>
    
</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script >
        $("#signin").unbind("click").on("click",function(){
            $('#modal-info').modal('show');
            $('#brideGroom').html("Login as Bride & Groom");
            $('#supplier').html("Login as Supplier");
            return false
        });

        $("#joinus").unbind("click").on("click",function(){
            $('#modal-info').modal('show');
            $('#brideGroom').html("Register as Bride & Groom");
            $('#brideGroom').attr("href","{{ url('registerBridesGroom') }}");
            $('#supplier').html("Register as Supplier");
            $('#supplier').attr("href","{{ url('registerSupplier') }}");
            return false
        });
        
    
</script>

</html>