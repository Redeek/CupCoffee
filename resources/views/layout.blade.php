<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CUP Coffee</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- Scripts -->     
        <script src="{{ asset('js/app.js') }}" defer></script>      
        <!-- Styles -->         
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
           </script>
           
           @yield('head')
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{route('stronagl')}}"><img src="assets/logoD.png"  style="height: 100px" alt="CUP COFFEE"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item btn-primary"> <a class="nav-link" href="{{route('stronagl')}}">Strona Główna</a></li>
                            <li class="nav-item btn-primary"> <a class="nav-link" href="{{route('Onas')}}">O Nas</a></li>
                            <li class="nav-item btn-primary"> <a class="nav-link" href="{{route('Zamow')}}">Zamów</a></li>
                            <li class="nav-item btn-primary"> <a class="nav-link" href="{{route('Dostawa')}}">Dostawa</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        @yield('content')
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto flex">
            <div class="bg-dark container mb-5 mt-5 p-2 ">
                <div class="bg-dark row">
                    <div class="col-md-1 bg-dark"></div>
                        <div class="col-md-3 bg-dark">
                            <div class="col-auto flex-column"><div class="small m-0 text-white">Copyright &copy; CUP COFFEE 2021</div></div>
                        </div>
                    <div class="col-md-3 bg-dark ">
                        <h5 class="text-white"> MENU </h5>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item"> <a class="nav-link" href="{{route('stronagl')}}">Strona Główna</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('Onas')}}">O Nas</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('Zamow')}}">Zamów</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('Dostawa')}}">Dostawa</a></li> 
                            </ul>
                    </div>
                    <div class="col-md-3 bg-dark ">
                        <h5 class="text-white"> Logowanie </h5>
                        <h5 class="text-white"> Dla pracowników </h5>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                @auth
                                <form action="{{route('Logout')}}" method="post">
                                    @csrf
                                <button class="navbar-toggler"> <a class="nav-link">Logout</a></button>
                                </form>
                                @endauth
                                @guest
                                <li class="nav-item"> <a class="nav-link" href="{{route('Loginin')}}">Login</a></li> 
                                @endguest
                            </ul>
                        
                    </div>
                  <div class="col-md-1 "></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

