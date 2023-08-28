@extends('layout')

@section('content')
<section class="py-5">
    <div class="container px-5">
    <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cart2"></i></div>
                <h1 class="fw-bolder">Złóż zamówienie</h1>
            </div>
	<form action="{{route("Zamow")}}" method="post" >
            @csrf
            <div class="row gx-5">
		<div class="col-lg-6">
                    <div class="form-floating mb-3">
			<input class="form-control" required id="imie" name="imie" type="text" pattern="[A-Za-z]{2,32}" title="Proszę wpisać swoje Imię. Powinno zawierać minimum dwie litery" />
			<label for="imie"> Imie </label>
                        @error('imie')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<input class="form-control" required id="nazwisko" name="nazwisko" type="text" pattern="[A-Za-z]{2,32}" title="Proszę wpisać swoje Nazwisko. Powinno zawierać minimum dwie litery"/>
			<label for="nazwisko"> Nazwisko </label>
                         @error('nazwisko')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<input class="form-control" required id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2}" title="Proszę wpisać swój email. Wzór emaila: XXX@XX.XX" />
			<label for="email"> Adres Email </label>
                         @error('email')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<input class="form-control" required id="telefon" name="nrtel" type="tel" pattern="[0-9]{9}" title="Numer posiada dziewięć cyfr" />
			<label for="telefon"> Numer Telefonu </label>
                         @error('nrtel')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<input class="form-control" required id="ulica" name="ulica" type="text" pattern="[A-Za-z]{2,32}" title="Proszę wpisać ulicę. Powinno zawierać minimum dwie litery. Nie ma cyfr" />
			<label for="ulica"> Ulica </label>
                         @error('ulica')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-floating mb-3">
                            <input class="form-control" required id="kod" name="kodpczt" type="text" pattern="[0-9]{2}-[0-9]{3}"  title="Proszę wpisać kod pocztowy. Wzór kodu: XX-XXX. Pamiętaj o myślniku"/>
                            <label for="kod"> kod pocztowy </label>
                             @error('kodpczt')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
			</div>
			<div class="col-lg-6 form-floating mb-3">
                            <input class="form-control" required id="miasto" name="miasto" type="text" pattern="[A-Za-z]{1,32}" title="Proszę wpisać miasto." />
                            <label for="miasto"> Miasto </label>
                             @error('miasto')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
			</div>
                    </div>
			<div class="form-floating mb-3">
                            <textarea class="form-control" id="wiadomosc" name="uwagi" style="height: 10rem"></textarea>
                            <label for="wiadomosc">Uwagi do sprzedającego</label>
			</div>
		</div>
		<div class="col-lg-6">
                    <div class="form-floating mb-3">
			<select class="form-select" id="kawa" name="kawa">
                            <option value="">Wybierz kawę</option>
                            <option>Latte</option>
                            <option>Cappuccino</option>
                            <option>Americana</option>
			</select>
			<label for="kawa">Pyszna kawa do wyboru</label>
                         @error('')
                        <div>
                            
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<select class="form-select" id="ciastka" name="ciastko">
                            <option value="">Wybierz ciastko</option>
                            <option>Sernik</option>
                            <option>Jabłecznik</option>
                            <option>Karpatka</option>
			</select>
			<label for="ciastka">Pyszne ciastko do wyboru</label>
                         @error('')
                        <div>
                            
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<select class="form-select" id="sniadanie" name="sniadanie">
                            <option value="">Wybierz sniadanie</option>
                            <option>Jajecznica</option>
                            <option>Omlet</option>
                            <option>Kanapki</option>
			</select>
			<label for="sniadanie">Pyszne sniadanie do wyboru</label>
                         @error('')
                        <div>
                            
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                            <h6>Dodatki:</h6>
                            <div class="mx-auto">
				<input type="checkbox" id="mleko" name="dodatki[]" value="mleko" />
				<label for="mleko"> Mleko bez laktozy </label>
                            </div>
                            <div class="mx-auto">
				<input type="checkbox" id="cukierek" name="dodatki[]" value="cukierek" />
				<label for="cukierek"> Cukierek </label>
                            </div>
                            <div class="mx-auto">
				<input type="checkbox" id="chleb" name="dodatki[]" value="chleb" />
				<label for="chleb"> Chleb </label>
                            </div>
                    </div>
                    <div class="form-floating mb-3">
			<h6>Sposób płatności:</h6>
			<div class="mx-auto">
                            <input type="radio" class="form-check-input m-sm-auto1" name="platnosc" id="visa" name="platnosc" value="visa" required />
                            <label for="visa"> Visa </label>
			</div>
			<div class="mx-auto"> 
                            <input type="radio" class="form-check-input m-sm-auto" name="platnosc" id="mastercard" name="platnosc" value="mastercard" />
                            <label for="mastercard">Mastercard  </label>
			</div>
			<div class="mx-auto" > 
                            <input type="radio" class="form-check-input m-sm-auto" name="platnosc" id="przyOdbiorze" name="platnosc" value="przyOdbiorze" />
                            <label for="przyOdbiorze"> Przy Odbiorze </label>
			</div>
                         @error('')
                        <div>
                            
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
			<input class="btn btn-primary w-75" type="submit" value="Złóż Zamówienie">
			<input class="btn btn-anuluj w-10" type="reset">
                    </div>
                    
                </div>
            </div>
        </form>
        </div>
    </div>
</section>

@endsection
