@extends('layout')

@section('content')
<main class="flex-shrink-0">
            
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Najlepsza kawiarnia w Lublinie!</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Najlepsza kawa od CUP Coffee dobra o każdej porze!</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Dowiedz się o Nas!</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="{{route('Dostawa')}}">Sprawdź gdzie dowozimy!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
							<div id="slideshow">
								<img src="obrazy/kawa.JPG" alt="kawa" class="active" />
								<img src="obrazy/kawa1.JPG" alt="kawa1" />
								<img src="obrazy/kawa2.JPG" alt="kawa2" />
							</div> 
						</div>
					</div>
                </div> 
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Krótko o Nas!</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Czym się zajmujemy?</h2>
                                    <p class="mb-0">Robimy NAJLEPSZĄ KAWĘ pełną pasji i miłości w Lublinie!</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Gdzie jesteśmy?</h2>
                                    <p class="mb-0">Jesteśmy w centrum Lublina. Znajdziesz Nas na Nałęczowskiej 18/156, do zobaczenia!</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people-fill"></i></div>
                                    <h2 class="h5">Kim jesteśmy?</h2>
                                    <p class="mb-0">Kilkuosobowy, młody i prężny zespół składający się z pasjonatów i miłośników kawy!</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-currency-bitcoin"></i></div>
                                    <h2 class="h5">Nie wiesz czym zapłacić?</h2>
                                    <p class="mb-0">Przyjmujemy płatność gotówką, kartą jak i kryptowalutami!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">Nowoczesna kawiarnia serwująca wyśmienitą kawę, śniadania, torty, przepyszne ciastka i desery, koktajle owocowo-warzywne, lody, sałatki, kanapki</div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

@endsection