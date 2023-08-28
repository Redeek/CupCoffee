@extends('layout')

@section('content')

<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5" >
        <h1 class="fw-bolder">Dziękujemy za zamówienie!</h1>
            <div id="map" class="text-center mb-5 col-lg-12 row centered">
                <div class='py-5 px-lg-4 d-flex justify-content-center 'style="float: left; width: 50%">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <h2 > Wróć na stronę główną </h2> <br>
                        <li class="nav-item"><a class="btn-primary nav-link text-dark" href="{{route('stronagl')}}"> Strona główna </a></li>
                    </ul>
                </div>
                <div class='py-5 px-lg-4 d-flex justify-content-center' style="float: right;  width: 50%"><h2 >Wyświetl zamówienie </h2></div>
            </div>
        </div>
</section>
@endsection