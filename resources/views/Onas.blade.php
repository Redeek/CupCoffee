@extends('layout')

@section('content')

<header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3 lemon-text">Naszą misją jest, aby rozbudzić w Tobie na nowo miłość do ziaren kawy.<br/> Powiększmy rodzinę kawoszy!</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Dobrze przygotowana kawa posmakuje większości ludzi. Najlepiej przygotowana kawa jest w stanie zasmakować każdemu oraz zmienić zdanie tych którzy jej nienawidzą.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="obrazy/rodzajekaw.jpg" alt="rodzaje" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Dla Ciebie przygotujemy wszystko!</h2>
                            <p class="lead fw-normal text-muted mb-0">Oferujemy szeroki wybór kaw sypanych jak i kaw rozpuszczalnych przygotowanych specjalnie dla Ciebie! Posiadamy różnego rodzaju mleka pochodzenia roślinnego oraz zwierzęcego. Oferujemy również pyszne ciastka z lokalnej piekarni, które idealnie wpasują się w gusta Naszych Klientów! </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="obrazy/wnetrze.jpg" alt="wnetrze" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Przyjazna atmosfera!</h2>
                            <p class="lead fw-normal text-muted mb-0">W Naszym lokalu jest dużo zieleni, która w codziennym biegu spowolni nasze szybkie tempo dnia, uspokoi oraz nacieszy oko błogą roślinnością. To wszystko dopełni Nasza kawa, przez którą zapamiętasz krótką chwilę z nami do końca dnia! </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Nasza drużyna</h2>
                        <p class="lead fw-normal text-muted mb-5">Najlepsi z najlepszych</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="obrazy/pracownicy/kasia.jpg" alt="Kasia" />
                                <h5 class="fw-bolder">Kasia</h5>
                                <div class="fst-italic text-muted">Specjalistka od kaw</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="obrazy/pracownicy/krystian.jpg" alt="Krystian" />
                                <h5 class="fw-bolder">Krystian</h5>
                                <div class="fst-italic text-muted">Artystyczna dusza</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="obrazy/pracownicy/asia.jpg" alt="Asia" />
                                <h5 class="fw-bolder">Asia</h5>
                                <div class="fst-italic text-muted">Ciasteczkowa mama</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="obrazy/pracownicy/ewelina.jpg" alt="Ewelina" />
                                <h5 class="fw-bolder">Ewelina</h5>
                                <div class="fst-italic text-muted">Doradca ds. kaw</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection