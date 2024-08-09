<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Decora Con Victoria</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style1.css')}}">
  <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg+xml">

  
    

    @livewireStyles()
    @stack('styles')
</head>

<body>

    <div class="">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand"href="{{route('home')}}">
                        <span>
                            Decora Con Victoria
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('nosotros') ? 'active' : '' }}">
                                    <a class="nav-link"  href="nosotros">Nosotros <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('galeria') ? 'active' : '' }}">
                                    <a class="nav-link"  href='galeria'>Galería <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://wa.link/6w89l4">Contáctanos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
      
        <!-- end slider section -->
    </div>


    <main>
        {{$slot}}
    </main>
    <!-- about section -->
   

    <!-- info section -->
    <section class="info_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_logo">
                        <h5>
                            Decora Con Victoria 
                        </h5>
                        <p>
                            En Decora Con Victoria, las flores florecen en tus eventos.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_links pl-lg-5">
                        <h5>Link</h5>
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">
                                <a href="nosotros">Nosotros</a>
                            </li>
                            <li class="{{ request()->routeIs('galeria') ? 'active' : '' }}">
                                <a href='galeria'>Galería</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="https://wa.link/6w89l4">Contáctanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
             
                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            Contacto
                        </h5>
                        <div>
                            <img src="{{asset('assets/images/location-white.png')}}" alt="">
                            <p>
                                Barrio el Calvario, 6xta Calle SO.
                            </p>
                        </div>
                        <div>
                            <img src="{{asset('assets/images/telephone-white.png')}}" alt="">
                            <p>
                                +504 95878405
                            </p>
                        </div>
                     
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; <span id="displayYear"></span> Todos los derechos reservados
            <a href="/">Decora Con Victoria</a>
        </p>
    </footer>
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
    <!-- Google Map -->
    <script src="https://www.google.com/maps/@14.7689219,-88.78618,17z?entry=ttu">
    </script>
    <!-- End Google Map -->
    
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    @stack('modals')
    

    @livewireScripts
    @yield('content')
    @stack('scripts')

</body>

</html>