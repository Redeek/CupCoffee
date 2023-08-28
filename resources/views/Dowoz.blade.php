@extends('layout')

@section('head')
<style>
table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
@endsection

@section('content')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5" >
            @auth
            <form action="{{route("Dostawa")}}" method="post">
                @csrf
                <div class="row gx-5 justify-content-center" id="gdzied">
                    <div class="row gx-5 justify-content-center" id="gdzied">
                        <h1 class="fw-bolder">Dodaj ulicę!</h1>
                        <table>
                            <tr>
                                <th>Miasto</th>
                                <th>Ulica</th>
                            </tr>
                            
                            <tr>
                                <td> <input  name="miasto" class="form-control"  > </td>
                                <td> <input  name="ulica" class="form-control" > </td>
                                
                            </tr>
                        </table>
                        <div class="col-md-6 py-2 px-5">
                            <div class="form-floating mb-3">
                            <button type="submit" class="btn btn-primary btn-block px-6 py-2">Dodaj miasto</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </form>
            
           <h1 class="fw-bolder">Adresy Dowozów</h1>
            <div class="row gx-5 justify-content-center" id="gdzied">
            
                @if( isset($dowozyadmin) )
                    <table>
                        <tr>
                            <th>Miasto</th>
                            <th>Ulica</th>
                        </tr>
                    @foreach($dowozyadmin as $dowozadres)
                        <tr>
                            <td> {{$dowozadres->miasto}} </td>
                            <td> {{$dowozadres->ulica}}  </td>
                        <form action="{{route("Dostawa.usun", $dowozadres)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <td> <button class="nav-item btn btn-anuluj w-10"> Usuń </button> </td>
                        </form>
                        </tr>
                    @endforeach
                    </table>
                @endif 
            </div>
            
            @endauth
            
            
            @guest
            <h1 class="fw-bolder">Sprawdź gdzie dowozimy!</h1>
            
            <div class="row gx-5 justify-content-center" id="gdzied">
            
                @if( isset($dowozy) )
                    <table>
                        <tr>
                            <th>Miasto</th>
                            <th>Ulica</th>
                        </tr>
                    @foreach($dowozy as $dowoz)
                        <tr>
                            <td>{{$dowoz->miasto}}</td>
                            <td>  {{$dowoz->ulica}}</td>
                        </tr>
                    @endforeach
                    </table>
                @else 
                <div class="text-center mb-5" >
                <a class="btn btn-primary " id="sprawdz" href="{{route('gdzie')}}"> Sprawdzaj! </a>
                </div>
                @endif 
                @endguest
               
            </div>
            
        </div>
    </div>
</section>

@endsection