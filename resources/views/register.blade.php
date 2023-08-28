@extends('layout')

@section('content')

<div class="row mt-5 mb-5">
    <aside class="col-sm-4">
        </aside>
    <aside class="col-sm-4">
        <form action="{{route('register')}}" method="post">
        @csrf
            <div class="form-group">
                <input name="email" id="email" class="form-group @error('email') border border-danger @enderror" placeholder="Email" type="email" value="{{old('email')}}" >
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div> 

            <div class="form-group">
                <input name="password" class="form-group @error('password') border border-danger @enderror" id="password" placeholder="******" type="password">
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>      

            <div class="form-group">
                <input name="password_confirmation" class="form-group @error('password') border border-danger @enderror" placeholder="Repeat password" type="password">
            </div>                                 
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>  
                    </div> 
                </div>                                           
            </div>                                                                 
        </form>
    </aside>
    <aside class="col-sm-4">
    </aside>
    </div>
@endsection
