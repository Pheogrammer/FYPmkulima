@extends('layouts.view')

@section('content')
@section('title')
    Home
@endSection
<!--/.modal -->
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14">

    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16 pb-md-17">
        <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
            <div class="col">
                <div class="card shadow-lg card-border-bottom border-soft-yellow">
                    <div class="card-body">
                        <img src="{{ asset('img/icons/lineal/browser.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                        <h4>Bei za mazao</h4>
                        <p class="mb-2">Angalia orodha ya bei elekezi ya mazao katika eneo ulilopo.</p>
                        <a href="{{ route('bei') }}" class="more hover link-yellow">Ingia zaidi</a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col">
                <div class="card shadow-lg card-border-bottom border-soft-green">
                    <div class="card-body">
                        <img src="{{ asset('img/icons/lineal/chat-2.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                        <h4>Habari za kilimo</h4>
                        <p class="mb-2">Angalia taarifa mbalimbali zinazohusu kilimo.</p>
                        <a href="{{ route('news') }}" class="more hover link-green">Ingia zaidi </a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col">
                <div class="card shadow-lg card-border-bottom border-soft-orange">
                    <div class="card-body">
                        <img src="{{ asset('img/icons/lineal/id-card.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                        <h4>Mabadiliko ya hali ya hewa</h4>
                        <p class="mb-2">Ijue hali ya hewa katika maeneo tofauti.</p>
                        <a href="{{ route('weather') }}" class="more hover link-orange">Ingia zaidi</a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col">
                <div class="card shadow-lg card-border-bottom border-soft-orange">
                    <div class="card-body">
                        <img src="{{ asset('img/icons/lineal/id-card.svg') }}"
                            class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
                        <h4>Jisajili</h4>
                        <p class="mb-2">Jisajili kupitia wavuti hii ili kupata dondoo za kilimo kwanjia ya SMS.</p>
                        <a href="#enrolling" class="more hover link-green">Ingia zaidi</a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-7">
                <figure><img class="w-auto" src="{{ asset('img/illustrations/i8.png') }}" alt="" />
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h3 class="display-4 mb-7">Pata mabadiliko ya bei za mazao mbalimbali kwa haraka na kwa uhakika.</h3>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                class="number fs-18">1</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Ingia kwenye mfumo</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                class="number fs-18">2</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Ingiza taarifa za kanda uliopo</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span
                                class="number fs-18">3</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Angalia bei ya zao unalotaka</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>

    </div>
    <!-- /.container -->
</section>


<!-- /section -->
<section class="wrapper bg-soft-primary">
    <div class="container py-2 py-md-10" id="enrolling">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

            <!--/column -->
            <div class="col-lg-5">
                <h3 class="display-4 mb-7">Pata dondoo za kilimo kiganjani mwako kupitia simu yako.</h3>

                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                class="number fs-18">1</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Piga *384*00007#</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                class="number fs-18">2</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Jisajili</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                class="number fs-18">3</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Kaa tayari kupokea dondoo kwa njia ya ujumbe mfupi</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <figure><img class="w-auto" src="{{ asset('img/illustrations/i5.png') }}" alt="" />
                </figure>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>
@endsection
