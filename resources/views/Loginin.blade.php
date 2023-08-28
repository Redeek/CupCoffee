@extends('layout')
@section('content')

<section class="py-5">
    <div class="container px-5 text-center">
    <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Zaloguj się jako pracownik</h1>
            </div>
            @if(session('status') )
            <div class="text-danger form-floating mb-4 text-sm">
                {{session('status')}}
            </div>
            @endif
            <div class="form-floating mb-5">
                <form action="{{route('Loginin')}}" method="post" >
                @csrf
		<div class="form-group">
                    <div class="form-control mb-4 form-group">
			<input class="form-control" id="email" name="email" type="email" value='{{old('email')}}'/>
			<label for="email"> Adres Email </label>
                        @error('email')
                        <div class="text-danger form-floating mb-4 text-sm">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-control mb-4 form-group">
                        <input class="form-control" id="passwd" name="password" type="password" />
                        <label for="password"> Hasło </label>
                        @error('password')
                        <div class="text-danger form-floating mb-4 text-sm">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-floating mb-3">
		<input class="btn btn-primary w-50" type="submit" value="Zaloguj">
                </div>
               </form>
            </div>
            
        </div>
    </div>
</section>

@endsection
